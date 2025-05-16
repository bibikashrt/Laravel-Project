<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('hello', function (Request $request) {
    return 'test hello';
    });

    Route::post('hello', function (Request $request) {
        return 'test hello post';
        });

        Route::post('/login',[AuthController::class,'login']);
        Route::post('/register',[AuthController::class,'register']);
