<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function(){
    Route::post('/login', 'login');
    Route::post('/refresh', 'refreshToken');
   
});

Route::middleware('auth:api')->group(function(){
    Route::controller(AuthController::class)->group(function(){
       
        Route::get('/me', 'me');
    });
});
