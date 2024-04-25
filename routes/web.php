<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\AccountController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Livewire\Messages\Messages;
use App\Http\Livewire\Messages\Index;
use App\Http\Livewire\Users;
use App\Http\Livewire\Counter;

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

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profile/setting', function () {
    return view('setting');
});

Auth::routes();

Route::get('/pages/home', [HomeController::class, 'index'])->name('home');

Route::get('/pages/account', [AccountController::class, 'account'])->name('pages.account');
Route::get('/pages/account/create', [AccountController::class, 'create'])->name('pages.account.create');
Route::post('/pages/account/store', [AccountController::class, 'store'])->name('pages.account.store');
Route::get('/pages/account/{id}/show', [AccountController::class, 'show'])->name('pages.account.show');
Route::get('/pages/account/{id}/edit', [AccountController::class, 'edit'])->name('pages.account.edit');
Route::put('/pages/account/{id}/update', [AccountController::class, 'update'])->name('pages.account.update');
Route::delete('/pages/account/{id}/destroy', [AccountController::class, 'destroy'])->name('pages.account.destroy');

// Route::group(['prefix' => 'pages', 'as' => 'pages.'], function () {
// });

// Route::get('/counter', Counter::class)->name('counter');

// Route::middleware('auth')->group(function (){
//     Route::get('/messages', Index::class)->name('messages.index');
//     Route::get('/messages/{query}', [Messages::class, 'messages'])->name('messages');
//     Route::get('/users', [Users::class, 'messages'])->name('users');
// });
