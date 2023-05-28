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


Route::group(['prefix' => 'admin'], function () {
    Route::get('/export', [\App\Http\Controllers\order\ExportController::class, 'export']);

    Route::get('/', 'App\Http\Controllers\Main\IndexController')->name('main.index');
    Route::group(['prefix' => 'orders'], function () {
        Route::get('/', 'App\Http\Controllers\order\IndexController')->name('order.index');
        Route::get('/{order}', 'App\Http\Controllers\order\ShowController')->name('order.show');
        Route::delete('/{order}', 'App\Http\Controllers\order\DeleteController')->name('order.delete');

    });

    Route::group(['prefix' => 'otz'], function () {
        Route::get('/', 'App\Http\Controllers\Otz\IndexController')->name('otz.index');
        Route::get('/create', 'App\Http\Controllers\Otz\CreateController')->name('otz.create');
        Route::post('/', 'App\Http\Controllers\Otz\StoreController')->name('otz.store');
        Route::get('/{otz}/edit', 'App\Http\Controllers\Otz\EditController')->name('otz.edit');
        Route::get('/{otz}', 'App\Http\Controllers\Otz\ShowController')->name('otz.show');
        Route::patch('/{otz}', 'App\Http\Controllers\Otz\UpdateController')->name('otz.update');
        Route::delete('/{otz}', 'App\Http\Controllers\Otz\DeleteController')->name('otz.delete');

    });
    Route::group(['prefix' => 'predmet'], function () {
        Route::get('/', 'App\Http\Controllers\predmet\IndexController')->name('predmet.index');
        Route::get('/create', 'App\Http\Controllers\predmet\CreateController')->name('predmet.create');
        Route::post('/', 'App\Http\Controllers\predmet\StoreController')->name('predmet.store');
        Route::get('/{predmet}/edit', 'App\Http\Controllers\predmet\EditController')->name('predmet.edit');
        Route::get('/{predmet}', 'App\Http\Controllers\predmet\ShowController')->name('predmet.show');
        Route::patch('/{predmet}', 'App\Http\Controllers\predmet\UpdateController')->name('predmet.update');
        Route::delete('/{predmet}', 'App\Http\Controllers\predmet\DeleteController')->name('predmet.delete');


    });
    Route::group(['prefix' => 'prepod'], function () {
        Route::get('/', 'App\Http\Controllers\Prepod\IndexController')->name('prepod.index');
        Route::get('/create', 'App\Http\Controllers\Prepod\CreateController')->name('prepod.create');
        Route::post('/', 'App\Http\Controllers\Prepod\StoreController')->name('prepod.store');
        Route::get('/{prepod}/edit', 'App\Http\Controllers\Prepod\EditController')->name('prepod.edit');
        Route::get('/{prepod}', 'App\Http\Controllers\Prepod\ShowController')->name('prepod.show');
        Route::patch('/{prepod}', 'App\Http\Controllers\Prepod\UpdateController')->name('prepod.update');
        Route::delete('/{prepod}', 'App\Http\Controllers\Prepod\DeleteController')->name('prepod.delete');


    });
});
Route::get('{page}', \App\Http\Controllers\Client\IndexController::class)->where('page', '.*');
