<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User_data;


class getProfileController extends Controller
{
    public function index(){
        return view('getProfile');
    }
    public function register(Request $req){

        $req->validate([
            'fname'=>'required',
            'lname'=>'required',
            'mname'=>'required',
            'phone'=>'required',
            'password'=>'required',
            'mail'=>'required',
            'addr'=>'required',
            'proff'=>'required',
            'about'=>'required'
        ]);
        $ud=new User_data;
        $data=$req->all();
        $ret=$ud->where('mail', $data['mail'])->first();
        if($ret==NULL){
            $ud->name=$data['fname']." ".$data['mname']." ".$data['lname'];
            $ud->mail=$data['mail'];
            $ud->password=$data['password'];
            $ud->phone=$data['phone'];
            $ud->mobile=$data['phone'];
            $ud->address=$data['addr'];
            $ud->profetion=$data['proff'];
            $ud->about=$data['about'];
            $ud->education=$data['education'];
            $ud->certificate=$data['certificate'];
            $ud->experience=$data['experience'];
            $ud->save();
            session()->put('data', $data);
            return redirect('/dashboard')->with('data',$data);
        }
        else{
            return redirect('/profile')->with('success_failed', 'ID exists');
        }
        // $validator = Validator::make($req->all(), [
        //     'fname' => [
        //         'required',
        //         function ($attribute, $value, $fail) {
        //             if ($value !== 'vadapav') {
        //                 $fail('The '.$attribute.' must be vadapav.');
        //             }
        //         },
        //     ],
        // ]);

        // if ($validator->fails()) {
        //     return redirect('profile')->withErrors($validator);
        // }

       
       // return redirect('/profile')->with('data',$req->all());
        
    }
}
