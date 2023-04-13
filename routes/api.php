<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Accelerometer Routes
Route::get('/acceleroments',[\App\Http\Controllers\AccelerometerController::class,"index"]);
Route::post('/acceleroments',[\App\Http\Controllers\AccelerometerController::class,"store"]);

// Qr Code Scan routes
Route::get('/scans',[\App\Http\Controllers\QrScanController::class,"index"]);
Route::post('/scans',[\App\Http\Controllers\QrScanController::class,'store']);
