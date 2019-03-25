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

                $product->increment('view');
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
        $products = Product::where('quantity', '>', '0')->latest()->take(8)->get();
        //return view('front.home.home',['products'=>$products]);

        $mostViewProducts = Product::orderby('view','desc')->take(8)->get();
        //return $mostViewProducts;
        return view('front.home.home',['products'=>$products],['mostViewProducts'=>$mostViewProducts]);
    }

    public function categoryProducts($unique_id){
        $category = Category::where('unique_id',$unique_id)->first();
            $products = Product::where('categoryId',$category->id)->latest()->paginate(10);
            //return $products;
            return view('front.category.categoryView',['products'=>$products]);
    }

    public function shop()
    {
        $products = Product::orderby('view','desc')->paginate(12);
        $products1 = Product::orderby('view','desc')->take(9)->get();
        //return $products;
        return view('front.shop.shop',['products'=>$products],['products1'=>$products1]);
    }
    public function about()
    {
        return view('front.about.about');
    }
    public function contact()
    {
        return view('front.contact.contact');
    }

}
