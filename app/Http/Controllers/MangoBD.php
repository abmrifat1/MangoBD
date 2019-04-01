<?php

namespace App\Http\Controllers;

use App\Category;
use App\ContactInfo;
use App\Product;
use App\User;
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
        return view('front.home.home',['products'=>$products, 'mostViewProducts'=>$mostViewProducts]);
    }

    public function categoryProducts($unique_id){
        $category = Category::where('unique_id',$unique_id)->first();
            $products = Product::where('categoryId',$category->id)->latest()->paginate(10);
            //return $products;
            return view('front.category.categoryView',['products'=>$products]);
    }

    public function shop()
    {
       /* if ($request->ajax() && isset($request->start)){
            $start = $request->start;
            $end =$request->end;

            $products = DB::table('products')
                ->where ('sellPrice', '>=', $start)
                ->where ('sellPrice', '<=', $end)
                ->orderBy('sellPrice', 'ASC')
                ->paginate(12);

            response()->json($products);
            return view('front.shop.shop', ['products'=>$products]);
        }
        elseif (isset($request->discountsId)){
          echo  $discountsId = $request->discountsId;
        }*/


        $products = Product::orderby('view','desc')->paginate(9);
        $products1 = Product::orderby('view','desc')->take(9)->get();
        $productsMostSells = Product::orderby('sell','desc')->where('sell', '>', 0)->latest()->get();
        //return $productsMostSells;
        $productsDiscounts = Product::distinct('discount')->select('id','discount')->orderBy('discount', 'desc')->take(5)->get();

        //return $productsDiscounts;

        return view('front.shop.shop',['products'=>$products,'products1'=>$products1, 'productsDiscounts'=>$productsDiscounts, 'productsMostSells'=>$productsMostSells]);
}


    public function filterProducts(Request $request){
    //return $request;
        /*return $request;
        $productsDiscounts = Product::distinct('discount')->select('id','discount')->orderBy('discount', 'desc')->get();
        $products = Product::where('type',$request->mangoType)->orWhere('discount',$request->productDiscount)->paginate(10);
       $range = explode('-',$request->priceRange);
        $start = $range[0];
        $end = $range[1];
        return $productsDiscounts;*/

        if (!empty($request->mangoType) && empty($request->productDiscount)){
            $products = Product::where('type', $request->mangoType)->take(12)->get();
           //return $products;
        }
        elseif (empty($request->mangoType) && !empty($request->productDiscount)){
            $products = Product::where('discount', '>=', $request->productDiscount)->take(12)->get();
            //return $products;
        }
        elseif (!empty($request->mangoType) && !empty($request->productDiscount)){
            $products = Product::where('type', $request->mangoType)->take(12)->get();
            $products = Product::where('discount', '>=', $request->productDiscount)->take(12)->get();

        }
        else{
                return redirect('/shop');
            }
            //return $products;

        return view('front.filter.filter',['products'=>$products]);

    }

    public function about(){
        return view('front.about.about');
    }
    public function contact(){
        return view('front.contact.contact');
    }
    public function blog(){
        return view('front.blog.blog-view');
    }
    public function singleBlogView(){
        return view('front.blog.single-blog-view');
    }

    public function saveContactInfo(Request $request){
        //return $request;
        $this->validate($request,[
            'name'=>'required|regex:/^[\pL\s\-]+$/u',
            'email'=>'required|email',
            'message'=>'required',
        ]);
        $contactinf=new ContactInfo();
        $contactinf->name=$request->name;
        $contactinf->email=$request->email;
        $contactinf->subject=$request->subject;
        $contactinf->message=$request->message;
        $contactinf->save();

        return redirect('/');
    }


    public function sellerInfo($id){
        //return $id;
        $sellers= new Product();
        $sellersInfo = User::where('id', $id)->first();

        //return $sellersInfo;

        return view('front.seller.seller-info', ['sellersInfo'=>$sellersInfo]);
    }


}
