<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MangoBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderby('id','desc')->get();
        return view('admin.category.manage',compact('categories'));
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
    public function show($unique_id)
    {

        $product = Product::where('unique_id',$unique_id)->first();
        if($product){

                Product::increment('view');
                $products =Product::where('categoryId',$product->categoryId)->latest()->take(8)->get();

            return view('front.singlePage.single',['product'=>$product,'products'=>$products]);
        }

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

    public function homepage(){
        $products = Product::latest()->take(8)->get();
        return view('front.home.home',['products'=>$products]);
    }
    public function shop()
    {
        return view('front.shop.shop');
    }
    public function about()
    {
        return view('front.about.about');
    }
    public function single($unique_id)
    {

    }
    public function checkout()
    {
        return view('front.checkout.checkout');
    }
    public function payment()
    {
        return view('front.payment.payment');
    }

}
