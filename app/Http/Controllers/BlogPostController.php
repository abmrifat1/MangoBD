<?php

namespace App\Http\Controllers;

use App\BlogPost;
use FontLib\Table\Type\nameRecord;
use Illuminate\Http\Request;
use DB;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogposts = BlogPost::orderby('id','desc')->get();
        return view('admin.blog_post.manage',compact('blogposts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog_post.create');
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
            $directory = 'images/blog-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$imageFile->getClientOriginalExtension();
            $imageUrl = $directory.$imageName;
            $imageFile->move($directory,$imageName);
        }

        $unique_id = time().md5(rand(100000,10000000));
        DB::table('blog_posts')->insert([
            'user_id'=>$request->usrId,
            'postName'=>$request->name,
            'title'=>$request->title,
            'image'=>$imageUrl,
            'description'=>$request->description,
            'blog_categoryId'=>$request->categoryId,
        ]);
        return redirect('/admin/blog-post/manage/')->with('message','New Category information saved successfully!');

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

    public function blogViewHomePage(){
        /*$blogPosts = BlogPost::orderby('id','desc')->get();
        return $blogPosts;*/
        $blogPosts= new BlogPost();
        $blogPosts = DB::table('blog_posts')
            ->join('users', 'blog_posts.user_id', '=', 'users.id')
            ->join('blog_categories', 'blog_posts.blog_categoryId', '=', 'blog_categories.id')
            ->select('blog_posts.*', 'users.name', 'blog_categories.postCategoryName')
             ->orderBy('id', 'desc')
            ->get();
        //return $blogPosts;
        return view('front.blog.blog-view', ['blogPosts'=>$blogPosts]);

    }

    public function singleBlogView($id){
        $blogPosts= new BlogPost();
        $blogPosts = DB::table('blog_posts')
            ->join('users', 'blog_posts.user_id', '=', 'users.id')
            ->join('blog_categories', 'blog_posts.blog_categoryId', '=', 'blog_categories.id')
            ->select('blog_posts.*', 'users.name', 'blog_categories.postCategoryName')
            ->where('blog_posts.id', $id)
            ->get();
        //return $blogPosts;
        return view('front.blog.single-blog-view', ['blogPosts'=>$blogPosts]);
    }

}
