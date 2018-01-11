<?php

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

Route::get('home', function () {
    return view('pages.home');
});

Route::get('master', function () {
    return view('layouts.master');
});

Route::get('mens', function () {
    return view('pages.mens');
});

Route::get('womens', function () {
    return view('pages.womens');
});

Route::get('single', function () {
    return view('pages.single');
});

Route::get('contact', function () {
    return view('pages.contact');
});

Route::get('checkout', function () {
    return view('pages.checkout');
});
