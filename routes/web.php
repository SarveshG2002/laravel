<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\getProfileController;
use App\User_data;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
// Route::get('/profile', function () {
//     return view('welcome');
// });

Route::get('/register', [RegistrationController::class,'index']);
Route::post('/register', [RegistrationController::class,'register']);

Route::get('/profile', [getProfileController::class,'index']);


Route::post('/getProfile', [getProfileController::class,'register']);

Route::get('/get_data',function(){
    $user_data=User_data::all();
    print_r($user_data->toArray());
});