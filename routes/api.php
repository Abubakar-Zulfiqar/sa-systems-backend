<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PlotController;
use App\Http\Controllers\HRController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProcurementController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\DevelopmentController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ARController;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/get-user', [AuthController::class, 'user']);
});

Route::post('/token', [AuthController::class, 'token']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::post('/demo', [DemoController::class, 'show']);
Route::get('/plot', [PlotController::class, 'index']);
Route::get('/hr', [HRController::class, 'index']);
Route::get('/pos', [POSController::class, 'index']);
Route::get('/inventory', [InventoryController::class, 'index']);
Route::get('/procurement', [ProcurementController::class, 'index']);
Route::get('/project', [ProjectController::class, 'index']);
Route::get('/design', [DesignController::class, 'index']);
Route::get('/development', [DevelopmentController::class, 'index']);
Route::get('/mobile', [MobileController::class, 'index']);
Route::get('/custom', [CustomController::class, 'index']);
Route::get('/game', [GameController::class, 'index']);
Route::get('/ar', [ARController::class, 'index']);

Route::group(['middleware' => 'sanctum_token'], function () {
    Route::post('/update-home/', [HomeController::class, 'update']);
    Route::post('/update-about/', [AboutController::class, 'update']);
    Route::post('/update-products/', [ProductsController::class, 'update']);
    Route::post('/update-services/', [ServicesController::class, 'update']);
    Route::post('/update-demo/', [DemoController::class, 'update']);
    Route::post('/update-plot/', [PlotController::class, 'update']);
    Route::post('/update-hr/', [HRController::class, 'update']);
    Route::post('/update-pos/', [POSController::class, 'update']);
    Route::post('/update-inventory/', [InventoryController::class, 'update']);
    Route::post('/update-procurement/', [ProcurementController::class, 'update']);
    Route::post('/update-project/', [ProjectController::class, 'update']);
    Route::post('/update-design/', [DesignController::class, 'update']);
    Route::post('/update-development/', [DevelopmentController::class, 'update']);
    Route::post('/update-mobile/', [MobileController::class, 'update']);
    Route::post('/update-custom/', [CustomController::class, 'update']);
    Route::post('/update-game/', [GameController::class, 'update']);
    Route::post('/update-ar/', [ARController::class, 'update']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
