<?php
/*
|--------------------------------------------------------------------------
| Public License Check Endpoint
|--------------------------------------------------------------------------
|
| Endpoint: /check
|
*/
Route::get("/check/{license}","Api\License\PublicInfo");
