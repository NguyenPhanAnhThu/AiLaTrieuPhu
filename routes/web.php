<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function(){
    return view('Splash');
});
Route::get('/home', function () {
    return view('Home');
})->name("home");
Route::get('/login', function () {
    return view('Login');
});
Route::get('/profile', "HomeController@profile");
Route::get('/cai_dat', function () {
    return view('cai_dat');
});
Route::get('/xephang', function () {
    return view('Xephang');
});
Route::get('/thi', "HomeController@thi");
Route::get('/thoat', function () {
    return view('Thoat');
});
Route::get('/tienthuong/{money}', "HomeController@tienThuong");
Route::get('/forgot-password', function () {
    return view('forgotPassword');
});

Route::get('/login/{email}', "HomeController@login");






