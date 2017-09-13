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

//
// User Routes
// Default Laravel Auth Routes
Auth::routes();
// User Account Control Panel
Route::prefix('user')->middleware('auth','role:user')->group( function(){
  Route::any('/', function(){
    return view('users.spa');
  })->name('user.home');
  Route::any('/{all}', function() {
    return View('users.spa');
  })->where(['all' => '.*']);

  // Route::get('/invoices', 'User\UserController@invoices')->name('user.invoices');
  // Route::get('/support', 'Support\UserTickets@listTickets')->name('user.support');
  // Route::get('/support/new', 'Support\UserTickets@createTicket')->name('user.support.create');
  // Route::get('support/{slug}', 'Support\UserTickets@view')->name('support.specific'); 
  // Route::get('/services', 'User\UserController@services')->name('user.services');
  // Route::get('/account', 'User\UserController@editUser')->name('user.useredit');
  // Route::post('/account/update', 'User\UserController@updateUser')->name('user.update');
  // Route::get('/pass', 'User\UserController@editPass')->name('user.passedit');
  // Route::post('/pass/change', 'User\UserInformationUpdater@changePass')->name('user.passupdate');
});

// Website Routes
Route::view('/','website.home');
