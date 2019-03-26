<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addToCart(Request $request){
        $product = Product::find($request->id);

        $product->increment('view');

        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->sellPrice,
            'qty' => $request->qty,
            'options' => [
                'image' => $product->picture_1,
                'discountProduct' => $product->discount
            ]
        ]);

        //return $product->discount;
        return redirect('/show-cart');
    }

    public function showCart(){
        $cartProducts = Cart::content();

        //return $cartProducts;
        return view('front.cart.show-cart',['cartProducts'=>$cartProducts]);
    }

    public function updateCartProduct(Request $request){
        Cart::update($request->rowId, $request->qty);
        return redirect('/show-cart')->with('message', 'Cart Product info update Successfully');
    }
    public function deleteCartProduct($id){
        Cart::remove($id);
        return redirect('/show-cart')->with('message', 'Cart Product info delete Successfully');
    }

    public function index()
    {
        //
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
