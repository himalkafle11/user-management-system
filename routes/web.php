<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

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

Route::get('register',[RegisterController::class,'registerUser']);

Route::get('login',[RegisterController::class,'loginUser']);

Route::post('store',[UserController::class,'store']);

Route::get('userpage',function(){
    return view('userpage');
});

Route::get('showUsers',[UserController::class,'show']);

Route::get('delete/{id}',[UserController::class,'destroy']);
Route::get('edit/{id}',[UserController::class,'edit']);
Route::post('update/{id}',[UserController::class,'update']);