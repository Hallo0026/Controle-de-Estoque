<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\AuthController;

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

Route::prefix('v1')->group(function() {

    Route::post('/login', [AuthController::class, 'login']);

});

// Rotas protegidas
Route::prefix('v1')->middleware('auth:sanctum')->group(function() {

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::apiResource('products', ProductController::class);
    Route::apiResource('brands', BrandController::class);

    Route::apiResource('distributors', DistributorController::class);
    Route::post('distributors/{id}/activate', [DistributorController::class, 'activate']);
    Route::post('distributors/{id}/deactivate', [DistributorController::class, 'deactivate']);

});
