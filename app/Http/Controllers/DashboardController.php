<?php

namespace App\Http\Controllers;

use App\ContactInfo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showContactMessage(){
        $messageContacts = ContactInfo::orderby('id','desc')->get();
        //return $messageContacts;

        return view('admin.contact.manage',['messageContacts'=>$messageContacts]);
    }

    public function viewContactMessage(Request $request){
        $messageContacts = ContactInfo::select('*')->where('id', $request->id)->first();
        //return $messageContacts;


        return view('admin.contact.view',['messageContacts'=>$messageContacts]);
    }

    public function replyContactMessage(Request $request){
        $messageContacts = ContactInfo::select('*')->where('id', $request->id)->first();
        //return $messageContacts;

        return view('admin.contact.replay',['messageContacts'=>$messageContacts]);
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
