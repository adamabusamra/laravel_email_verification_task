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
//Auth routes with verify functionality enabled
Auth::routes(['verify' => true]);
//Here I applied the verified middleware
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
