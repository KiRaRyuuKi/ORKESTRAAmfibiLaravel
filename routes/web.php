<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowroomController;
use App\Http\Livewire\Buy;
use App\Http\Livewire\Chat\Chat;
use App\Http\Livewire\Chat\Context;
use App\Http\Livewire\Rental;
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

Route::get('/', [CarController::class, 'welcome']);
Route::get('/market', [CarController::class, 'market']);
Route::get('/{buy}/buy', Buy::class)->name('car.buy');
Route::get('/{rental}/rental', Rental::class)->name('car.rental');
Route::get('/{id}/payment', [CarController::class, 'payment'])->name('payment');
Route::post('/payment/store', [PaymentController::class, 'store'])->name('payment.store');
Route::get('/transaction', [PaymentController::class, 'index'])->name('transaction');

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function (){
    Route::get('/chat', Context::class)->name('chat.context');
    Route::get('/{query}/chat', Chat::class)->name('chat');
});

Route::get('/administrator/login', function () {
    return view('administrator.auth.login');
})->name('administrator.login');

Route::post('/administrator/login', [AdministratorController::class, 'login'])->name('administrator.login.submit');

Route::middleware(['auth', 'verified'])->prefix('administrator')->group(function () {
    Route::view('/dashboard', 'administrator.dashboard')->name('dashboard');

    Route::prefix('data-mobil')->group(function () {
        Route::get('/', [CarController::class, 'index'])->name('data-mobil');
        Route::get('/create', [CarController::class, 'create'])->name('data-mobil.create');
        Route::post('/store', [CarController::class, 'store'])->name('data-mobil.store');
        Route::get('/{id}/edit', [CarController::class, 'edit'])->name('data-mobil.edit');
        Route::put('/{id}/update', [CarController::class, 'update'])->name('data-mobil.update');
        Route::delete('/destroy', [CarController::class, 'destroy'])->name('data-mobil.destroy');
    });

    Route::prefix('sewa-mobil')->group(function () {
        Route::get('/sewa', [PaymentController::class, 'sewa'])->name('sewa-mobil.sewa');
        Route::view('/denda', 'administrator.sewa_mobil.denda');
        Route::view('/pengembalian', 'administrator.sewa_mobil.pengembalian');
    });

    Route::prefix('penjualan')->group(function () {
        Route::get('/jual', [PaymentController::class, 'jual'])->name('penjualan.jual');
        Route::view('/pengembalian', 'administrator.penjualan.pengembalian');
    });

    Route::view('/help', 'administrator.help')->name('help');

    Route::get('/pengaturan', [ShowroomController::class, 'index'])->name('setting');
    Route::put('/pengaturan/{id}/update', [ShowroomController::class, 'update'])->name('setting.update');

    Route::view('/feedback', 'administrator.feedback')->name('feedback');
});
