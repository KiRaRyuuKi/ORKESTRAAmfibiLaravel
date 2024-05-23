<?php

use App\Http\Controllers\BrandCategoryController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowroomController;
use App\Http\Livewire\Chat\Chat;
use App\Http\Livewire\Chat\Context;
use App\Http\Livewire\Users;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/market', function () {
    return view('market');
});

Route::get('/rent', function () {
    return view('rent');
});

Route::get('/buy', function () {
    return view('buy');
});

Route::get('/payment', function () {
    return view('payment');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function (){
    Route::get('/chat', Context::class)->name('chat.context');
    Route::get('/{query}/chat', Chat::class)->name('chat');
    Route::get('/users', Users::class)->name('users');
});

Route::middleware(['auth', 'verified'])->prefix('administrator')->group(function () {
    Route::view('/dashboard', 'administrator.dashboard')->name('dashboard');

    Route::prefix('data-mobil')->group(function () {
        Route::get('/merek-&-kategori', [BrandCategoryController::class, 'index']);
        Route::get('/list', [CarController::class, 'index']);
    });

    Route::prefix('sewa-mobil')->group(function () {
        Route::view('/data-sewa', 'administrator.sewa_mobil.data-sewa');
        Route::view('/denda', 'administrator.sewa_mobil.denda');
        Route::view('/pengembalian', 'administrator.sewa_mobil.pengembalian');
    });

    Route::prefix('penjualan')->group(function () {
        Route::view('/data-penjualan', 'administrator.penjualan.data-penjualan');
        Route::view('/pengembalian', 'administrator.penjualan.pengembalian');
    });

    Route::view('/laporan', 'administrator.laporan');

    Route::view('/help', 'administrator.help');

    Route::get('/pengaturan', [ShowroomController::class, 'index'])->name('administrator.pengaturan.index');
    Route::put('/pengaturan/{id}/update', [ShowroomController::class, 'update'])->name('administrator.pengaturan.update');

    Route::view('/feedback', 'administrator.feedback');
});
