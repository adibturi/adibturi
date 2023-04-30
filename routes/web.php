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
Route::get('/', function () {
    return view('index',[
                "title"=>"home"
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
                "title"=>"profile"
    ]);
});

Route::get('/portofolio', function () {
    return view('portofolio',[
                "title"=>"portofolio"
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
                "title"=>"contact"
    ]);
});
