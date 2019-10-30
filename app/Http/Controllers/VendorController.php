<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Order;
use DB;
use Session;
use Cart;
use App\Shipping;
use App\Payment;
use App\OrderDetail;
use PDF;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function userDashboard(){
        return view('userAdmin.login.login');
    }

    public function customerDashboardLogin(Request $request){
        $customer = Customer::where('email', $request->email)->first();
        //return $customer;

        if ($customer) {
            if (password_verify($request->password, $customer->password)) {
                Session::put('customerId', $customer->id);
                Session::put('first_name', $customer->first_name);
                Session::put('last_name', $customer->last_name);
                Session::put('image', $customer->image);

                /*Session::put('image', $request->image);
                Session::put('customerName', $request->first_name.' '.$request->last_name);
                Session::put('customerId', $customer->id);
                Session::put('customerName', $request->first_name . ' ' . $request->last_name);*/

                return view('userAdmin.home.index');

            } else {
                return redirect('/user/home')->with('loginmMessage', 'Invalid password');
            }
        }
        else{
            return redirect('/user/home')->with('loginMessage', 'Invalid email');
        }
    }

    public function customerDashboardLogout(){
        Session::forget('customerId');
        Session::forget('customerName');
        Session::forget('page');

        Cart::destroy();
        return redirect('/');
    }

    public function showCustomerOrderInfo(){
    //return Session::get('customerId');
        $orders = new Order();
        $orders = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->join('payments', 'orders.id', '=', 'payments.order_id')
            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
            ->join('products', 'products.id', '=', 'order_details.product_id')
            ->select('orders.*', 'customers.first_name', 'customers.last_name', 'payments.payment_type', 'payments.payment_status', 'products.user_id')
            ->orderBy('id', 'desc')
            ->get();
        //return $orders;


        return view('userAdmin.order.show-customer-order', ['orders'=>$orders]);
    }

    public function viewCustomerOrderDetails($id){
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::find($order->id);
        $products = OrderDetail::where('order_id', $id)->get();
        $cartProducts = Cart::content();

        //return $cartProducts;
        /* Find Product Discount */
        /*$orders = new Order();
        $orders = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->join('payments', 'orders.id', '=', 'payments.order_id')
            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
            ->join('products', 'products.id', '=', 'order_details.product_id')
            ->select('orders.*', 'customers.first_name', 'customers.last_name', 'payments.payment_type', 'payments.payment_status', 'products.user_id', 'products.discount')
            ->orderBy('id', 'desc')
            ->get();
        return $orders;*/
        /* Find Product Discount */

        return view('userAdmin.order.view-order-detail',[
            'customer'=>$customer,
            'shipping'=>$shipping,
            'products'=>$products,
            'payments'=>$payment,
        ]);


    }

    public function viewCustomerOrderInvoice($id){
        //return $id;
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::find($order->id);
        $products = DB::table('order_details')
            ->join('products', 'products.id', '=', 'order_details.product_id')
            ->select('order_details.*', 'products.discount')->where('order_details.order_id', '=', $id)
            ->orderBy('id', 'desc')
            ->get();
        //return $products;

        //$products = OrderDetail::where('order_id', $id)->get();
        //$products = Product::select('discount')->where('id',$id)->get();
        //return $products;
        return view('userAdmin.order.show-invoice',[
            'customer'=>$customer,
            'shipping'=>$shipping,
            'products'=>$products,
            'payments'=>$payment,
            'order'=>$order,
        ]);
    }


    public function downloadCustomerOrderInvoice($id){
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::find($order->id);
        $products = OrderDetail::where('order_id', $id)->get();

        $pdf = PDF::loadView('userAdmin.order.download-invoice',[
            'customer'=>$customer,
            'shipping'=>$shipping,
            'products'=>$products,
            'payments'=>$payment,
            'order'=>$order
        ]);
        return $pdf->stream('0000'.$order->id.'.pdf');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
