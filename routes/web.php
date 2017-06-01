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
    return view('home');
});

Auth::routes();
// Admin Routes
Route::group(['prefix' => 'admin'], function(){
  Route::get('/', 'Auth\AdminController@index')->name('admin.dashboard');
  Route::get('login', 'Auth\AdminLoginController@showLogin')->name('admin.login');
  Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('logout', 'Auth\AdminLoginController@logout')->name('adminLogout');
});

// User Routes
Route::get('/home', 'HomeController@index')->name('home');
