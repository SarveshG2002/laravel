<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getProfileController extends Controller
{
    public function index(){
        return view('getProfile');
    }
    public function register(Request $req){
        // $req->validate([
        //     'fname'=>'required',
        //     'lname'=>'required',
        //     'mname'=>'required',
        //     'phone'=>'required',
        //     'mail'=>'required|mail',
        //     'addr'>'required',
        //     'proff'=>'required'
        // ]);
        $data=$req->all();
        return redirect('/profile')->with('data',$req->all());
        
    }
}
