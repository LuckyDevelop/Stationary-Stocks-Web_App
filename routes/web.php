<?php

use App\Http\Controllers\BuyingController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionController;
use App\Models\Stock;
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
    return view('main');
});

Route::controller(BuyingController::class)->group(function () {
    Route::get('/buying', 'index');
    Route::post('/buyings/add', 'store');
});

Route::controller(TransactionController::class)->group(function () {
    Route::get('/usages', 'index');
    Route::post('/usages/add', 'store');
});

Route::controller(StockController::class)->group(function () {
    Route::get('/stock', 'index');
    Route::post('/stock/add', 'store');
    Route::delete('/stock/{id}', 'destroy');
});

Route::controller(SupplierController::class)->group(function () {
    Route::get('/supplier', 'index');
    Route::get('/supplier/edit/{id}', 'edit');
    Route::post('/supplier/add', 'store');
    Route::delete('/supplier/{id}', 'destroy');
    Route::get('/save', 'create');
    return view('welcome');
});
