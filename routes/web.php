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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', function () {
    return view('main/welcome');
})->middleware('App\Http\Middleware\Authenticate');

Route::get('/utilisateurs', function () {
    return view('main/userList');
})->middleware('App\Http\Middleware\Authenticate');


Route::get('/test', function () {
    return view('main/login');
});
