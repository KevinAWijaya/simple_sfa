<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerTTHController;
use App\Http\Controllers\CustomerTTHDetailController;
use App\Http\Controllers\MobileConfigController;

Route::apiResource('customers', CustomerController::class);
Route::apiResource('customertth', CustomerTTHController::class);
Route::apiResource('customertthdetail', CustomerTTHDetailController::class);
Route::apiResource('mobileconfig', MobileConfigController::class);

Route::post('customertth/update-by-customer/{custId}', [CustomerTTHController::class, 'bulkUpdateByCustomer']);
