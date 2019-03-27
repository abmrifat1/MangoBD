<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactInfo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $messageCounts = ContactInfo::count();
        $messageContacts = ContactInfo::orderby('id','desc')->get();
        //return $messageCounts;

        return view('admin.home.index', ['messageCounts'=>$messageCounts, 'messageContacts'=>$messageContacts]);
    }

    public function error(){

    }
}
