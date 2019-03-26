<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetail;
use App\Payment;
use App\Product;
use App\Shipping;
use App\User;
use Illuminate\Http\Request;
use DB;
use PDF;
use Cart;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function showOrderInfo(){

        $orders = new Order();
        $orders = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->join('payments', 'orders.id', '=', 'payments.order_id')
            ->select('orders.*', 'customers.first_name', 'customers.last_name', 'payments.payment_type', 'payments.payment_status')
            ->orderBy('id', 'desc')
            ->get();
        //return $orders;
        return view('admin.order.show-order', ['orders'=>$orders]);
    }

    public function viewOrderDetails($id){
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::find($order->id);
        $products = OrderDetail::where('order_id', $id)->get();

        return view('admin.order.view-order-detail',[
            'customer'=>$customer,
            'shipping'=>$shipping,
            'products'=>$products,
            'payments'=>$payment
        ]);


    }

    public function viewOrderInvoice($id){
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::find($order->id);
        $products = OrderDetail::where('order_id', $id)->get();
        return view('admin.order.show-invoice',[
            'customer'=>$customer,
            'shipping'=>$shipping,
            'products'=>$products,
            'payments'=>$payment,
            'order'=>$order
        ]);
    }

    public function myPdf(){
        $pdf = PDF::loadView('pdf');
        return $pdf->stream('demo.pdf');
    }

    public function downloadOrderInvoice($id){
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::find($order->id);
        $products = OrderDetail::where('order_id', $id)->get();

        $pdf = PDF::loadView('admin.order.download-invoice',[
            'customer'=>$customer,
            'shipping'=>$shipping,
            'products'=>$products,
            'payments'=>$payment,
            'order'=>$order
        ]);
        return $pdf->stream('0000'.$order->id.'.pdf');
    }

    public function editOrderInfo($id){
        //return $id;
        /*$orders = Order::select('order_status', 'id')->where('id',$id)->first();
        //return $orders;

        $payments = Payment::select('payment_status', 'id')->where('id',$id)->first();
        //return $payments;*/


        return view('admin.order.edit-order', ['orders'=>$id]);
    }


    public function updateOrderInfo(Request $request){

        //return $request;
        $orders = Order::select('order_status', 'id')->where('id',$request->id)->first();
        //return $orders;
        $payments = Payment::select('payment_status', 'id')->where('id',$request->id)->first();
        //return $orders;


        DB::table('orders')
            ->where('id',$request->id)
            ->update([
               'order_status'=>$request->orderStatus,
            ]);
        DB::table('payments')
            ->where('id',$request->id)
            ->update([
                'payment_status'=>$request->paymentStatus,
            ]);

        $orderDetails = OrderDetail::select('product_id', 'product_quantity')->where('order_id',$request->id)->get();
        //return $orderDetails;

        foreach ($orderDetails as $orderDetail){
            $ordersProducts = Product::where('id', $orderDetail->product_id)->first();
            DB::table('products')
                ->where('id',$ordersProducts->id)
                ->update([
                    'quantity'=>$ordersProducts->quantity-$orderDetail->product_quantity,
                ]);
        }

        if ($request->orderStatus == 'success' && $request->paymentStatus){
            foreach ($orderDetails as $orderDetail){
                $ordersProducts = Product::where('id', $orderDetail->product_id)->first();
                DB::table('products')
                    ->where('id',$ordersProducts->id)
                    ->update([
                        'sell'=>$ordersProducts->increment('sell'),
                    ]);
            }
        }


        return redirect('/order-info');
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
