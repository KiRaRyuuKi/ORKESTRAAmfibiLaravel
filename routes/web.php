<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\AccountController;
use App\Http\Controllers\Pages\HomeController;

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

Route::get('/pages/home', [HomeController::class, 'index'])->name('home');

Route::get('/pages/account', [AccountController::class, 'account'])->name('pages.account');
Route::get('/pages/account/generate', [AccountController::class, 'generate'])->name('pages.account.generate');
Route::get('/pages/account/create', [AccountController::class, 'create'])->name('pages.account.create');
Route::post('/pages/account/store', [AccountController::class, 'store'])->name('pages.account.store');
Route::get('/pages/account/{id}/show', [AccountController::class, 'show'])->name('pages.account.show');
Route::get('/pages/account/{id}/edit', [AccountController::class, 'edit'])->name('pages.account.edit');
Route::put('/pages/account/{id}/update', [AccountController::class, 'update'])->name('pages.account.update');
Route::delete('/pages/account/{id}/destroy', [AccountController::class, 'destroy'])->name('pages.account.destroy');

// Route::group(['prefix' => 'pages', 'as' => 'pages.'], function () {
// });

