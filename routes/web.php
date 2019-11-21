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

Route::get('/korpa', function () {
    return view('korpa');
});

Route::get('/uloguj-se', function () {
    return view('login');
});

Route::get('/kreiranje-naloga', function () {
    return view('kreiranje-naloga');
});
