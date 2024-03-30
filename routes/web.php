<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Pages\AccountController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\Pages\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'account', 'as' => 'account.'], function () {
    Route::get('/', [AccountController::class, 'account'])->name('account');
    Route::get('/create', [AccountController::class, 'create'])->name('create');
    Route::post('/store', [AccountController::class, 'store'])->name('store');
    Route::get('/{id}', [AccountController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [AccountController::class, 'edit'])->name('edit');
    Route::put('/{id}', [AccountController::class, 'update'])->name('update');
    Route::delete('/{id}', [AccountController::class, 'destroy'])->name('destroy');
});
