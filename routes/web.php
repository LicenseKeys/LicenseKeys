<?php

Auth::routes();

Route::view('/', 'welcome');
Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function(){
    Route::get('/', 'HomeController@index')->name('dashboard_home');
    ## Need To Define
    #   Invoice Page
    #   Payment Page
    #   Support Page
    #   Services Page
    #   API for public to view key validility
});