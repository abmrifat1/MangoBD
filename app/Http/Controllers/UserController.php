<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $users = User::orderby('id','desc')->get();
        return view('admin.user.manage',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
            $directory = 'images/user-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$imageFile->getClientOriginalExtension();
            $imageUrl = $directory.$imageName;
            $imageFile->move($directory,$imageName);
        }
        $unique_id = time().md5(rand(100000,10000000));
        DB::table('users')->insert([
            'unique_id'=>$unique_id,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'image'=>$imageUrl,
            'password' => Hash::make($request['password'])
        ]);
        return redirect('/admin/user/')->with('message','New User information saved successfully!');
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
    public function edit($unique_id)
    {
        $user = User::where('unique_id',$unique_id)->first();
        return view('admin.user.edit',compact('user'));
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
        $user = User::where('unique_id',$unique_id)->first();
        $this->validate($request,[
            'name'=>'required|string',
            'image'=>'image'
        ]);
        $imageUrl = '';
        if($request->hasFile('image')){
            if(file_exists($user->image)){
                @unlink($user->image);
            }
            $imageFile = $request->file('image');
            $directory = 'images/user-images/';
            $imageName = substr(md5(time()),2, 10).rand(10000,999999).time().'.'.$imageFile->getClientOriginalExtension();
            $imageUrl = $directory.$imageName;
            $imageFile->move($directory,$imageName);
        }
        DB::table('users')->
            where('unique_id',$unique_id)
            ->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'image'=>$imageUrl,
            'type'=>$request->userRole,
            'password' => Hash::make($request['password'])
        ]);
        return redirect('/admin/user/')->with('message','Update User information saved successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $unique_id)
    {
        $user = User::where('unique_id',$unique_id)->first();
        User::where('unique_id',$unique_id)
            ->delete();
        if(file_exists($user->image)){
            @unlink($user->image);
        }
        return redirect()->back();
    }

    public function store1(Request $request){
            if($request->ajax())
            {
                $validator = Validator::make($request->all(),[
                    'name'=>'required|string|max:100',
                    'email'=>'required|email|max:100',
                    'category_id'=>'required',
                    'description'=>'required|string',
                ]);
                if($validator->fails())
                {
                    return response()->json(
                        [
                            'error'=>true,
                            'message'=>$validator->messages(),
                            'code'=>400
                        ],400);
                };
                //$unique_id = time().rand(100000,10000000);
                DB::table('forums')->insert([
                    'name'=>$request->name,
                    'category_id'=>$request->category_id,
                    'description'=>$request->description,
                    'email'=>$request->email
                ]);
                //return redirect('/discuss/post/create')->with('message','You have successfully uploaded you post, we will review it and after then we publish it in public!');
                return ['success'=> "You question submitted"];
            }
        }


}
