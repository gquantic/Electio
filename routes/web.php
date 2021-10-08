<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('catalog');
});

Route::get('/catalog/{category}', [\App\Http\Controllers\ShopController::class, 'categorySelect']);

Route::get('/goods/{id}', [\App\Http\Controllers\GoodsController::class, 'exportGood']);
