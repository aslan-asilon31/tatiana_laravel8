<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Transaction\TransactionController;
use App\Http\Controllers\Admin\AdminController;
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

/* 
Route::get('/', function () {
    return view('templates/frontend');
});
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// frontend

Route::get('/', [AdminController::class, 'landingpage']);


// backend
Route::get('/user-setting', [App\Http\Controllers\setting\UserController::class, 'index'])->name('user-setting');
Route::get('/user-setting/import', [App\Http\Controllers\setting\UserController::class, 'import'])->name('user-setting-import');

// Transaction
// Route::prefix('transaction')->group(function () {
    // Route::resource('/transaction', [App\Http\Controllers\Transaction\TransactionController::class]);
// });
Route::resource('transactions', TransactionController::class);

