<?php
// Default Laravel Auth Routes
Auth::routes();

// User Control Panel
Route::middleware('auth','role:user')->prefix('user')->group( function(){
  Route::any('/', function(){
    return view('users.spa');
  })->name('user_dashboard');
  Route::any('/{all}', function() {
    return View('users.spa');
  })->where(['all' => '.*']);
});

Route::prefix('admin')->middleware('auth', 'role:superadmin|admin|support')->group( function(){
  Route::any('/', function(){
    return view('users.spa');
  })->name('admin_dashboard');
  Route::any('/{all}', function() {
    return View('users.spa');
  })->where(['all' => '.*']);
});

// Website Routes
Route::view('/','website.home');
