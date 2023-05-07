<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getProfileController extends Controller
{
    public function index(){
        return view('getProfile');
    }
}
