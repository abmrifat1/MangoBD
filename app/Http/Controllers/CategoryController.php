<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
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
        return view('admin.category.create');
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
            'name'=>'required',
            'image'=>'image'
        ]);

        $image = $request->file('image');
        $directory = 'images/category-images/';
        $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image->getClientOriginalExtension();
        $imageUrl = $directory.$imageName;
        $image->move($directory,$imageName);

        $unique_id = time().md5(rand(100000,10000000));

        DB::table('categories')->insert([
            'unique_id'=>$unique_id,
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$imageUrl,
            'isActive'=>$request->isActive
        ]);
        return redirect('/admin/category/')->with('message','New Category information saved successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($unique_id)
    {
        $category = Category::where('unique_id',$unique_id)->first();
        return view('admin.category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($unique_id)
    {
        $category = Category::where('unique_id',$unique_id)->first();
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $unique_id)
    {
        $this->validate($request,[
            'name'=>'required',
            'image'=>'image'
        ]);
        $imageUrl = $request->previousImageUrl;
        if($request->hasFile('image')){
            unlink($imageUrl);
            $image = $request->file('image');
            $directory = 'images/Category-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$image->getClientOriginalExtension();
            $imageUrl = $directory.$imageName;
            $image->move($directory,$imageName);
        }
        DB::table('Category')
            ->where('unique_id',$unique_id)
            ->update([
                'name'=>$request->name,
                'description'=>$request->description,
                'image'=>$imageUrl,
                'isActive'=>$request->isActive
            ]);
        return redirect('/admin/category')->with('message','Category information updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$unique_id)
    {
        Category::where('unique_id',$unique_id)
            ->delete();
        unlink($request->image);
        return redirect('/admin/category')->with('message','Category information deleted successfully!');
    }
    public function unPublish($unique_id){
        Category::where('unique_id',$unique_id)
            ->update([
                'isActive'=>'DeActive'
            ]);
        return redirect('/admin/category')->with('message','Category information UnPublished!');
    }
    public function publish($unique_id){
        Category::where('unique_id',$unique_id)
            ->update([
                'isActive'=>'Active'
            ]);
        return redirect('/admin/category')->with('message','Category information Published!');
    }
}
