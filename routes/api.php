<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\AdminOrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/order', [AdminOrderController::class, 'index'])->middleware('auth:sanctum');
Route::get('/order/{id}', [AdminOrderController::class, 'show'])->middleware('auth:sanctum');
Route::post('/order', [AdminOrderController::class, 'store'])->middleware('auth:sanctum');
Route::put('/order/{id}', [AdminOrderController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/order/{id}', [AdminOrderController::class, 'destroy'])->middleware('auth:sanctum');
