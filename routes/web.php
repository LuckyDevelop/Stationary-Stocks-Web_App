<?php

use App\Http\Controllers\BuyingController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionController;
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

Route::get('/stock', [StockController::class, 'index']);
Route::get('/buying', [BuyingController::class, 'index']);
Route::get('/usages', [TransactionController::class, 'index']);

Route::controller(SupplierController::class)->group(function () {
    Route::get('/supplier', [SupplierController::class, 'index']);
    Route::get('/supplier/edit/{id}', [SupplierController::class, 'edit']);
    Route::post('/supplier/add', [SupplierController::class, 'store']);
    Route::delete('/supplier/{id}', 'destroy');
    Route::get('/save', 'create');
});
