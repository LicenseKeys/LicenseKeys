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
    return view('website.home');
});

Auth::routes();

// Admin Routes
Route::group(['prefix' => 'admin'], function(){
  Route::get('/', 'Auth\AdminController@index')->name('admin.dashboard');
  Route::get('login', 'Auth\AdminLoginController@showLogin')->name('admin.login');
  Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::post('logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

// User Routes
Route::group(['prefix' => 'user'], function(){
  Route::get('/', 'User\UserController@index')->name('user.home');
  Route::get('/invoices', 'User\UserController@invoices')->name('user.invoices');
  Route::get('/support', 'Support\UserTickets@listTickets')->name('user.support');
  Route::get('/support/new', 'Support\UserTickets@createTicket')->name('user.support.create');
  Route::get('/services', 'User\UserController@services')->name('user.services');
  Route::get('/account', 'User\UserController@editUser')->name('user.useredit');
  Route::get('/pass', 'User\UserController@editPass')->name('user.passedit');
});
Route::get('support', 'Support\UserTickets@listTickets');
Route::get('support/{slug}', 'Support\UserTickets@view');
// Website Routes
