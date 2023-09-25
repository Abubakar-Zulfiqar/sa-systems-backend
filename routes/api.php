<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\EmailController;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/get-user', [AuthController::class, 'user']);
});

Route::post('/token', [AuthController::class, 'token']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::post('/products', [ProductsController::class, 'show']);
Route::post('/services', [ServicesController::class, 'show']);
Route::post('/demo', [DemoController::class, 'show']);

Route::group(['middleware' => 'sanctum_token'], function () {
    Route::post('/update-home/', [HomeController::class, 'update']);
    Route::post('/update-about/', [AboutController::class, 'update']);
    Route::post('/update-products/', [ProductsController::class, 'update']);
    Route::post('/update-services/', [ServicesController::class, 'update']);
    Route::post('/update-demo/', [DemoController::class, 'update']);
});

Route::post('/send-email', [EmailController::class, 'sendEmail']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
