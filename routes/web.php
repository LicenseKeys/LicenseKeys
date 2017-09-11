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
// Admin Routes
Route::group(['prefix' => 'admin'], function(){
  Route::get('/', 'Auth\AdminController@index')->name('admin.dashboard');
  Route::get('login', 'Auth\AdminLoginController@showLogin')->name('admin.login');
  Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::post('logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

// User Routes
Auth::routes();
Route::prefix('user')->middleware('user')->group( function(){
  Route::get('/', 'User\UserController@index')->name('user.home');
  Route::get('/invoices', 'User\UserController@invoices')->name('user.invoices');
  Route::get('/support', 'Support\UserTickets@listTickets')->name('user.support');
  Route::get('/support/new', 'Support\UserTickets@createTicket')->name('user.support.create');
  Route::get('/services', 'User\UserController@services')->name('user.services');
  Route::get('/account', 'User\UserController@editUser')->name('user.useredit');
  Route::post('/account/update', 'User\UserInformationUpdater@updateUser')->name('user.update');
  Route::get('/pass', 'User\UserController@editPass')->name('user.passedit');
  Route::post('/pass/change', 'User\UserInformationUpdater@changePass')->name('user.passupdate');
});
  Route::get('support', 'Support\UserTickets@listTickets')->name('support.home');
  Route::get('support/{slug}', 'Support\UserTickets@view')->name('support.specific');

  // Website Routes
Route::view('/','website.home');