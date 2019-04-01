<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function productAddSeller(){
        $users = DB::table('users')->select('*')->get();
        $categories = DB::table('categories')->select('*')->get();
        //return $users;
        return view('front.product.add-product', ['users'=>$users, 'categories'=>$categories]);
    }

    public function addProdcutBySeller(Request $request){
        $this->validate($request,[
            'name'=>'required|string',
            'image'=>'image',
            'image1'=>'image',
            'image2'=>'image'
        ]);
        $imageUrl = '';
        if($request->hasFile('image')){
            $imageFile = $request->file('image');
            $directory = 'images/product-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$imageFile->getClientOriginalExtension();
            $imageUrl = $directory.$imageName;
            $imageFile->move($directory,$imageName);
        }
        $imageUrl1 = '';
        if($request->hasFile('image1')){
            $imageFile = $request->file('image1');
            $directory = 'images/product-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$imageFile->getClientOriginalExtension();
            $imageUrl1 = $directory.$imageName;
            $imageFile->move($directory,$imageName);
        }
        $imageUrl2 = '';
        if($request->hasFile('image2')){
            $imageFile = $request->file('image2');
            $directory = 'images/product-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$imageFile->getClientOriginalExtension();
            $imageUrl2 = $directory.$imageName;
            $imageFile->move($directory,$imageName);
        }
        $unique_id = time().md5(rand(100000,10000000));
        DB::table('products')->insert([
            'unique_id'=>$unique_id,
            'name'=>$request->name,
            'sku'=>$request->sku,
            'regPrice'=>$request->regPrice,
            'discount'=>$request->discount,
            'sellPrice'=>$request->sellPrice,
            'quantity'=>$request->quantity,
            'isStock'=>$request->isStock,
            'categoryId'=>$request->categoryId,
            'user_id'=>$request->usrId,
            'picture_1'=>$imageUrl,
            'picture_2'=>$imageUrl1,
            'picture_3'=>$imageUrl2,
            'description'=>$request->description,
            'type'=>$request->type,
            'isApprove'=>$request->isApprove
        ]);
        return redirect('/')->with('message','New Product information saved successfully!');

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
