<?php

use App\Http\Controllers\API\Product\FilterListController;
use App\Http\Controllers\API\Product\ShowController;
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

Route::post('/orders', \App\Http\Controllers\API\Order\StoreController::class);
Route::post('/products', \App\Http\Controllers\API\Product\IndexController::class);
Route::get('/products/filters', FilterListController::class);
Route::get('/products/{product}', ShowController::class);

