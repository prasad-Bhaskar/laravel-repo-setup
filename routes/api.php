<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['test' => "done"];
});

Route::controller(AuthController::class)->group(function(){
    Route::post('/login', "login");
    Route::post('/logout', "logout");
    Route::get('/me', 'me')->middleware('auth:api');
});

Route::prefix('users')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/', 'getAllUser');
        Route::get('/{id}', 'getUserById');
    });
});