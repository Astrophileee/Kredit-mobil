<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CashController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\Mobil2Controller;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\Pembeli2Controller;


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

Route::get('/',[HomeController::class, 'show']);
Route::get('/cash',[CashController::class, 'show']);
Route::prefix('/admin')->group(function(){
    Route::get('/', [AdminController::class, 'show']);
    Route::resource('/mobil', MobilController::class);
    Route::resource('/mobil2', Mobil2Controller::class);
    Route::resource('/pembeli', PembeliController::class);
    Route::resource('/pembeli2', Pembeli2Controller::class);
    Route::get('/cash/{cash}/cetak-nota', [CashController::class, 'cetak_nota'])->name('cash.cetak_nota');
    Route::resource('/cash', CashController::class);
    
});