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

// Route::get('/', function () {
//     return view('auth/login');
// });
Route::get('/', function () {
    return view('layouts/dashboard');
});

// 1 is Role id ... it must be fetched after login
Route::get('/1', 'HomeController@index');

Route::get('/1/request','HomeController@create');
Route::post('/1','HomeController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
