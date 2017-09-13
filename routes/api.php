<?php
use Illuminate\Http\Request;
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->get('/user/update', 'User\UserController@updateUser');

Route::any('/check', function() {
    return "I need to write this endpoint to return PUBLIC License data";
});