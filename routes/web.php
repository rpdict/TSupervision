<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::match(['get', 'post'], '/login', function () {
//    return view('auth.login');
//});
//
//Route::match(['get', 'post'], '/register', function () {
//    return view('auth.register');
//});

Route::get('example', function () {
    return view('example');
});
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/test', function () {
    return view('test');
});