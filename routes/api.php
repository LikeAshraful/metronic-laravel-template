<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\AboutPageController;
use App\Http\Controllers\Api\MissionValuesController;
use App\Http\Controllers\Api\PrivacyPolicyController;
use App\Http\Controllers\Api\PushNotificationController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/send-notification', [PushNotificationController::class, 'sendNotification']);


Route::get('about', [AboutPageController::class, 'index']);
Route::get('privacy-policy', [PrivacyPolicyController::class, 'index']);
Route::get('mission-values', [MissionValuesController::class, 'index']);
Route::get('faqs', [FaqController::class, 'index']);
