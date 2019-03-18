<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderby('id','desc')->get();
        return view('admin.product.manage',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|string',
            'image'=>'image'
        ]);
        $imageUrl = '';
        if($request->hasFile('image')){
            $imageFile = $request->file('image');
            $directory = 'images/product-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$imageFile->getClientOriginalExtension();
            $imageUrl = $directory.$imageName;
            $imageFile->move($directory,$imageName);
        }
        $unique_id = time().md5(rand(100000,10000000));
        DB::table('products')->insert([
            'unique_id'=>$unique_id,
            'name'=>$request->name,
            'sku'=>$request->sku,
            'regPrice'=>$request->regPrice,
            'sellPrice'=>$request->sellPrice,
            'quantity'=>$request->quantity,
            'isStock'=>$request->isStock,
            'categoryId'=>$request->categoryId,
            'isAvailable'=>$request->isAvailable,
            'picture_1'=>$imageUrl,
            'description'=>$request->description,
            'isApprove'=>$request->isApprove
        ]);
        return redirect('/admin/product/')->with('message','New Product information saved successfully!');
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
        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($unique_id)
    {
        $product = Product::where('unique_id',$unique_id)->first();
        return view('admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $unique_id)
    {
        $product = Product::where('unique_id',$unique_id)->first();
        $this->validate($request,[
            'name'=>'required|string',
            'image'=>'image'
        ]);
        $imageUrl = '';
        if($request->hasFile('image')){
            if(file_exists($product->picture_1))
                @unlink($product->picture_1);
            $imageFile = $request->file('image');
            $directory = 'images/product-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$imageFile->getClientOriginalExtension();
            $imageUrl = $directory.$imageName;
            $imageFile->move($directory,$imageName);
        }
        DB::table('products')
            ->where('unique_id',$unique_id)
            ->update([
            'name'=>$request->name,
            'sku'=>$request->sku,
            'regPrice'=>$request->regPrice,
            'sellPrice'=>$request->sellPrice,
            'quantity'=>$request->quantity,
            'isStock'=>$request->isStock,
            'isAvailable'=>$request->isAvailable,
            'picture_1'=>$imageUrl,
            'description'=>$request->description,
            'isApprove'=>$request->isApprove
        ]);
        return redirect('/admin/product/')->with('message','Update Product information saved successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$unique_id)
    {
        $product = Product::where('unique_id',$unique_id)->first();
        Product::where('unique_id',$unique_id)
            ->delete();
        if(file_exists($product->picture_1)){
            @unlink($product->picture_1);
        }
        return redirect()->back();
    }

    public function unPublish($unique_id){
        Product::where('unique_id',$unique_id)
            ->update([
                'isApprove'=>'Not_Approved'
            ]);
        return redirect('/admin/product')->with('message','Product information UnPublished!');
    }
    public function publish($unique_id){
        Product::where('unique_id',$unique_id)
            ->update([
                'isApprove'=>'Approve'
            ]);
        return redirect('/admin/product')->with('message','Product information Published!');
    }
}
