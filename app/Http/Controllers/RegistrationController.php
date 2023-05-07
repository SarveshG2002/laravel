<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_data;

class RegistrationController extends Controller
{
    public function index(){
        return view('form');
    }
    public function register(Request $req){
        $req->validate(
            [
                'name'=>'required',
                'mail'=>'required|email',
                'password'=>'required'
            ]
        );
        
        $data=$req->all();
        if($data['name']=='Sarvesh Gandhere' && $data['mail']=='sarveshgandhere2002@gmail.com' && $data['password']=='1234'){
            $ud=new User_data;
            $ud->name=$data['name'];
            $ud->mail=$data['mail'];
            $ud->password=$data['password'];
            $ud->user_id=2;
            $ud->save();
            return redirect('/profile');
        }
        else{
            return redirect('/login')->with('success_failed', 'failed');
        }
    }
}
