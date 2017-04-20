<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::any('demo',function (){
   return 'this demo produce';
});
Route::any('demo21',function (){
    return 'this demo21 produce';
});
Route::any('demo31',function (){
    return 'this demo31 produce';
});