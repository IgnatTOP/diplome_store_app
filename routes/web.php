<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'App\Http\Controllers\Main\IndexController')->name('main.index');

});
Route::get('{page}', \App\Http\Controllers\Client\IndexController::class)->where('page', '.*');
