<?php
use Illuminate\Http\Request;
Route::prefix('user')->middleware('auth:api')->group( function(){
    Route::any('/', function (Request $request) {
        return $request->user();
    });
    Route::post('update', 'User\UserController@updateUser');
});    

// Public Endpoint to check license status.
Route::any('/check', function() {
    return "I need to write this endpoint to return PUBLIC License data";
});