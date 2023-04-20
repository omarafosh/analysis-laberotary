<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AnalysisController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\HomeController;

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


Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users',    UserController::class);
    Route::resource('doctors',  DoctorController::class);
    Route::resource('units',    UnitController::class);
    Route::resource('analysis', AnalysisController::class);
    Route::resource('invoice',  InvoiceController::class);
    Route::resource('settings', SettingController::class);
});
