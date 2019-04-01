<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Mail\ConfirmOrder;
use App\Mail\SendEmail;
use App\Order;
use App\OrderDetail;
use App\Payment;
use App\Product;
use App\Shipping;
use App\User;
use Carbon\Carbon;
use Cart;
use Mail;
use Illuminate\Http\Request;
use Session;
use Hash;
use DB;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.payment.checkout');
    }

    public function saveCustomerInfo(Request $request){
        $this->validate($request,[
            'first_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'last_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'email'=>'required|email|unique:customers,email',
            'phone'=>'required|size:11|regex:/(01)[0-9]{9}/',
            'image'=>'image',
            'address'=>'required',
            'password'=>'required|max:20|min:6|confirmed',

        ]);
        $imageUrl = '';
        if($request->hasFile('image')){
            $imageFile = $request->file('image');
            $directory = 'images/customer-profile-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$imageFile->getClientOriginalExtension();
            $imageUrl = $directory.$imageName;
            $imageFile->move($directory,$imageName);
        }
        //return $imageUrl;

        $customer=new Customer();
        $customer->first_name=$request->first_name;
        $customer->last_name=$request->last_name;
        $customer->email=$request->email;
        $customer->phone=$request->phone;
        $customer->address=$request->address;
        $customer->image=$imageUrl;
        $customer ->password= bcrypt($request->password);
        $customer->save();
        $customerId = $customer->id;
        Session::put('customerId', $customerId);
        Session::put('image', $imageUrl);
        Session::put('customerName', $request->first_name.' '.$request->last_name);


        /*$data = $customer->toArray();
        Mail::send('mail.congratulation-mail', $data, function ($message) use ($data){
        $message->to($data['email']);
              $message->subject('Confirmation Mail');
       });*/

        return redirect('/shipping-info');



    }

    public function showShippingInfo(){
        $customerId= Session::get('customerId');
        $customer = Customer::find($customerId);
        return view('front.payment.shipping-info', ['customer'=>$customer]);
    }

    public function saveShippingInfo(Request $request){
        $this->validate($request,[
            'full_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'email'=>'required|email',
            'phone'=>'required|size:11|regex:/(01)[0-9]{9}/',
            'address'=>'required',
        ]);
        $shipping=new Shipping();
        $shipping->full_name=$request->full_name;
        $shipping->email=$request->email;
        $shipping->phone=$request->phone;
        $shipping->address=$request->address;
        $shipping->save();

        $shippingId = $shipping->id;
        Session::put('shippingId', $shippingId);
       return redirect('/payment-info');
    }

    public function showPaymentForm(){
        return view('front.payment.payment-info');
    }

    public function saveOrderInfo(Request $request){
        $paymentType = $request->payment_type;
        $bkash_numbers = $request->number;
        $transactionIds = $request->transactionId;
        //return $transactionIds;
        $customer = Customer::findOrFail(Session::get('customerId'));
        Mail::to($customer['email'])->send(new ConfirmOrder($customer));
        if ($paymentType == 'Cash On Delivery'){
            $order = new Order();
            $order->customer_id = Session::get('customerId');
            $order->shipping_id = Session::get('shippingId');
            $order->order_total = Session::get('grant_total');
            $order->save();
            $orderId = $order->id;

            $payment = new Payment();
            $payment->order_id = $orderId;
            $payment->payment_type = $paymentType;

            $payment->save();

            $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct){
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $orderId;
                $orderDetail->product_id = $cartProduct->id;
                $orderDetail->product_name = $cartProduct->name;
                $orderDetail->product_price = $cartProduct->price;
                $orderDetail->product_quantity = $cartProduct->qty;
                $orderDetail->save();
            }
            Cart::destroy();
            return redirect('/');
        }
        elseif ($paymentType == 'BKash'){
            $order = new Order();
            $order->customer_id = Session::get('customerId');
            $order->shipping_id = Session::get('shippingId');
            $order->order_total = Session::get('grant_total');
            $order->save();
            $orderId = $order->id;

            $payment = new Payment();
            $payment->order_id = $orderId;
            $payment->payment_type = $paymentType;
            $payment->bkash_number = $bkash_numbers;
            $payment->transactionId = $transactionIds;
            $payment->save();

            $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct){
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $orderId;
                $orderDetail->product_id = $cartProduct->id;
                $orderDetail->product_name = $cartProduct->name;
                $orderDetail->product_price = $cartProduct->price;
                $orderDetail->product_quantity = $cartProduct->qty;
                $orderDetail->save();
            }
            Cart::destroy();
            return redirect('/');
        }
        elseif ($paymentType == 'Paypal'){

        }


    }

    public function deleteOrderInfo( Request $request){
        $valu = $request->id;
        //return $valu;


        $orders = Order::where('id',$request->id)->first();


        $orderDetails = OrderDetail::where('order_id',$request->id)->first();


        $orderpayments = Payment::where('order_id',$request->id)->first();
        $orders->delete();
        $orderDetails->delete();
        $orderpayments->delete();

        return redirect()->back();


    }

    public function deleteProductInfo(Request $request){
        $product = Product::where('unique_id',$request->id)->first();
        $product->delete();
        return redirect()->back();
    }

    public function deleteUserInfo(Request $request){
        $user = User::where('unique_id',$request->id)->first();
        $user->delete();
        return redirect()->back();
    }

    public function customerLogin(Request $request){
        $customer = Customer::where('email', $request->email)->first();
        //return $customer;

        if ($customer) {
            if (password_verify($request->password, $customer->password)) {
                Session::put('image', $customer->image);
                Session::put('customerName', $customer->first_name.' '.$customer->last_name);
                Session::put('customerId', $customer->id);
                return redirect('/shipping-info');

            } else {
                return redirect('/checkout')->with('message', 'Invalid password');
            }
        }
        else{
            return redirect('/checkout')->with('message', 'Invalid email');
        }
    }


    public function customerSignIn(){
        return view('front.login.login');
    }

    public function customerSignInHome(Request $request){
        $seller = DB::table('users')->select('*')->where('email', $request->email)->first();

        $customer = Customer::where('email', $request->email)->first();
        //return $customer;


        if ($customer) {
            if (password_verify($request->password, $customer->password)) {
                Session::put('image', $customer->image);
                Session::put('customerName', $customer->first_name.' '.$customer->last_name);
                Session::put('customerId', $customer->id);

                return redirect('/');

            } else {
                Session::put('message', 'Invalid password');
                return redirect()->back();
            }
        }
        elseif ($seller){
            //return $seller->password;
            if (password_verify($request->password, $seller->password)) {
                Session::put('image', $seller->image);
                Session::put('sellerName', $seller->name);
                Session::put('userId', $seller->id);

                return redirect('/');

            } else {
                Session::put('message', 'Invalid password');
                return redirect()->back();
            }
        }
        else{
            Session::put('message', 'Invalid email');
            return redirect()->back();
        }
    }

    public function customerSignUp(){
        return view('front.register.register');
    }

    public function customerSignUpHome(Request $request){
        //return $request;
        if ($request->userRole == 'Customer'){
        $this->validate($request,[
            'first_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'last_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'email'=>'required|email|unique:customers,email',
            'phone'=>'required|size:11|regex:/(01)[0-9]{9}/',
            'image'=>'image',
            'address'=>'required',
            'password'=>'required|max:20|min:6|confirmed',

        ]);
        $imageUrl = '';
        if($request->hasFile('image')){
            $imageFile = $request->file('image');
            $directory = 'images/customer-profile-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$imageFile->getClientOriginalExtension();
            $imageUrl = $directory.$imageName;
            $imageFile->move($directory,$imageName);
        }
        $verification_code = rand(100000,999999);
        $data = array(
            'name'=> $request['first_name'],
            'verification_code'=>$verification_code
        );
        //return $imageUrl;
        Mail::to($request['email'])->send(new SendEmail($data));

        $customer=new Customer();
        $customer->first_name=$request->first_name;
        $customer->last_name=$request->last_name;
        $customer->email=$request->email;
        $customer->phone=$request->phone;
        $customer->verification_code=$verification_code;
        $customer->address=$request->address;
        $customer->image=$imageUrl;
        $customer ->password= bcrypt($request->password);
        $customer->save();
        $customerId = $customer->id;
        Session::put('customerId', $customerId);
        Session::put('image', $imageUrl);
        Session::put('userName', $request->first_name.' '.$request->last_name);

            return redirect('/verify-customer');
        }

        else{
            $this->validate($request,[
                'first_name'=>'required|regex:/^[\pL\s\-]+$/u',
                'last_name'=>'required|regex:/^[\pL\s\-]+$/u',
                'email'=>'required|email|unique:users,email',
                'phone'=>'required|size:11|regex:/(01)[0-9]{9}/',
                'userRole'=>'required',
                'image'=>'image',
                'address'=>'required',
                'password'=>'required|max:20|min:6|confirmed',
            ]);
            $name= $request->first_name.' '.$request->last_name;
            //return $name;
            $imageUrl = '';
            if($request->hasFile('image')){
                $imageFile = $request->file('image');
                $directory = 'images/user-images/';
                $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$imageFile->getClientOriginalExtension();
                $imageUrl = $directory.$imageName;
                $imageFile->move($directory,$imageName);
            }

            $verification_code = rand(100000,999999);
            $data = array(
                'name'=> $request['first_name'],
                'verification_code'=>$verification_code
            );
            //return $imageUrl;
            Mail::to($request['email'])->send(new SendEmail($data));

            $unique_id = time().md5(rand(100000,10000000));
            $user=new User();
            $user->unique_id=$unique_id;
            $user->name=$name;
            $user->email=$request->email;
            $user->verification_code=$verification_code;
            $user->phone=$request->phone;
            $user->address=$request->address;
            $user->image=$imageUrl;
            $user->type= $request->userRole;
            $user ->password= bcrypt($request->password);
            $user->save();
            $userId = $user->id;
            Session::put('userId', $userId);
            Session::put('image', $imageUrl);
            Session::put('sellerName', $request->first_name.' '.$request->last_name);

            return redirect('/verify');
        }

    }
    public function verify()
    {
        return view('userAdmin.verification');
    }
    public function verifyCustomer()
    {
        return view('userAdmin.verificationCustomer');
    }
    public function Doverify(Request $request)
    {
        $user = User::findOrFail($request->userId);
        if($user->verification_code == $request->verification_code){
            $time = Carbon::now();
            $user->email_verified_at=$time;
            $user->save();
            Session::put('verified', 'verified');
            return view('userAdmin.home.index')->with('success','You are verified now');
        }else{
            Session::flash('message', 'Please enter correct verification code!');
            Session::flash('alert-class', 'alert-danger');
            return redirect('/verify');
        }
    }
    public function DoCustomerverify(Request $request)
    {
        $customer = Customer::findOrFail($request->userId);
        //return $customer;
        if($customer->verification_code == $request->verification_code){
            $time = Carbon::now();
            $customer->email_verified_at=$time;
            $customer->save();
            Session::put('verified', 'verified');
            return view('userAdmin.home.index')->with('success','You are verified now');
        }else{
            Session::flash('message', 'Please enter correct verification code!');
            Session::flash('alert-class', 'alert-danger');
            return redirect('/verify-customer');
        }
    }
    public function customerLogout(){
        Session::forget('customerId');
        Session::forget('customerName');
        Session::forget('userId');
        Session::forget('sellerName');
        Session::forget('shippingId');
        Session::forget('grant_total');
        Session::forget('page');

        Cart::destroy();
        return redirect('/');
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
