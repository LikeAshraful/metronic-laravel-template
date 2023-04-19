<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\Drivers\LoginController;
use App\Http\Controllers\Api\Drivers\ProfileController;
use App\Http\Controllers\Api\PushNotificationController;
use App\Http\Controllers\Api\Drivers\DriverTripController;
use App\Http\Controllers\Api\Drivers\StartDayTripController;
use App\Http\Controllers\Api\Drivers\DriverEmergencyController;
use App\Http\Controllers\Api\Drivers\EmergencyReasonController;
use App\Http\Controllers\Api\Drivers\DriverNotificationController;

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

Route::get('/data', [DriverTripController::class, 'getTripDetails']);

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [LoginController::class, 'login']);
    Route::post('forgot-password', [LoginController::class, 'forgotPassword']);
    Route::post('reset-password', [LoginController::class, 'resetPassword']);
});

Route::group(['middleware' => ['auth:driver-api']], function () {
    Route::apiResource('start-day-trip', StartDayTripController::class)->only('index', 'store');
    Route::post('trip-status-change', [DriverTripController::class, 'statusChange']);
    Route::apiResource('trip-details', DriverTripController::class)->only('index');
    Route::get('trip-list', [DriverTripController::class, 'tripList']);

    Route::get('get-profile', [ProfileController::class, 'profile']);
    Route::put('update-profile', [ProfileController::class, 'profileUpdate']);

    Route::post('store-token-firebase', [PushNotificationController::class, 'storeDriverToken']);
    Route::get('get-notifications', [DriverNotificationController::class, 'index']);

    Route::apiResource('emergency-reasons', EmergencyReasonController::class)->only('index');
    Route::post('driver-emergency', [DriverEmergencyController::class, 'store']);

    Route::get('auth/google-map-key', [AuthController::class,'googleMapKey']);

});


