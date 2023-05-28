<?php

use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportController;
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
    return view('welcome');
});

Route::get('/pengiriman', function(){
    return view('pengiriman');
});


Route::get('/transactions',[TransactionController::class,'index'])->name('transactions.index');

Route::get('/reports',[ReportController::class,'index'])->name('reports.index');

Route::get('/deliveries',[DeliveryController::class,'index'])->name('deliveries.index');

Route::get('/login',[LoginController::class,'login']);
Route::post('/welcome',[LoginController::class,'welcome']);
Route::post('/login','Auth\LoginController@login')->middleware('cek');