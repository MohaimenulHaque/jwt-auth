<?php

use App\Http\Controllers\V1\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::group([

    // 'middleware' => 'api',
    // 'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login',        [AuthController::class, 'login']);
    Route::post('register',     [AuthController::class, 'register']);


});

Route::middleware('api')->group(function () {
    Route::post('logout',       [AuthController::class, 'logout']);
    Route::get('profile',       [AuthController::class, 'profile']);
});