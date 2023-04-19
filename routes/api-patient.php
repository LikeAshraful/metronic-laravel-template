<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\Patients\LoginController;
use App\Http\Controllers\Api\Patients\ReasonController;
use App\Http\Controllers\Api\Patients\ProfileController;
use App\Http\Controllers\Api\PushNotificationController;
use App\Http\Controllers\Api\Patients\LocationController;
use App\Http\Controllers\Api\Patients\ServicesController;
use App\Http\Controllers\Api\Patients\PassengerController;
use App\Http\Controllers\Api\Patients\TimeShiftController;
use App\Http\Controllers\Api\Patients\PsychiatristController;
use App\Http\Controllers\Api\Patients\AuthSkipReasonController;
use App\Http\Controllers\Api\Patients\CustomLocationController;
use App\Http\Controllers\Api\Patients\OtpVerificationController;
use App\Http\Controllers\Api\Patients\TransportRequestController;
use App\Http\Controllers\Api\Patients\MaintenanceRequestController;
use App\Http\Controllers\Api\Patients\PatientNotificationController;
use App\Http\Controllers\Api\Patients\PsychiatristRequestController;

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
Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [LoginController::class, 'login']);
    Route::post('forgot-password', [LoginController::class, 'forgotPassword']);
    Route::post('reset-password', [LoginController::class, 'resetPassword']);
});

Route::group(['middleware' => ['auth:patient-api']], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('skip-reason', [AuthSkipReasonController::class, 'createReason']);
        Route::any('request-otp', [OtpVerificationController::class, 'sendOtp']);
        Route::post('verify-otp', [OtpVerificationController::class, 'verifyOtp']);
    });

    Route::get('get-profile', [ProfileController::class, 'profile']);
    Route::put('update-profile', [ProfileController::class, 'profileUpdate']);
    Route::apiResource('reasons', ReasonController::class)->only('index');
    Route::apiResource('locations', LocationController::class)->only('index');
    Route::apiResource('custom-locations', CustomLocationController::class)->only('index');
    Route::apiResource('passengers', PassengerController::class)->only('index', 'store');
    Route::apiResource('psychiatrists', PsychiatristController::class)->only('index');

    Route::get('services', [ServicesController::class, 'index']);
    Route::get('time-shifts', [TimeShiftController::class, 'index']);
    Route::apiResource('maintenance-requests', MaintenanceRequestController::class)->only('index', 'store', 'show', 'update');
    Route::apiResource('transport-requests', TransportRequestController::class)->only('index', 'store', 'show', 'update');
    Route::apiResource('psychiatrist-requests', PsychiatristRequestController::class)->only('index', 'store', 'show', 'update');

    Route::post('store-token-firebase', [PushNotificationController::class, 'storePatientToken']);
    Route::get('get-notifications', [PatientNotificationController::class, 'index']);

    Route::get('auth/google-map-key', [AuthController::class,'googleMapKey']);
});
