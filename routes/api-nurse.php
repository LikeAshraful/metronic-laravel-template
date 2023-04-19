<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Nurses\LoginController;
use App\Http\Controllers\Api\PushNotificationController;


Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [LoginController::class, 'login']);
    Route::post('forgot-password', [LoginController::class, 'forgotPassword']);
    Route::post('reset-password', [LoginController::class, 'resetPassword']);
});

Route::group(['middleware' => ['auth:nurse-api']], function () {
    Route::post('store-token-firebase', [PushNotificationController::class, 'storeNurseToken']);
});


