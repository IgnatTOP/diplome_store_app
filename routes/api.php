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
Route::post('/orders', \App\Http\Controllers\API\orders\StoreController::class);
Route::get('/otz', \App\Http\Controllers\API\otz\IndexController::class);
Route::get('/prepods', \App\Http\Controllers\API\Prepods\IndexController::class);
Route::get('/prepods/filters', \App\Http\Controllers\API\Prepods\FilterController::class);