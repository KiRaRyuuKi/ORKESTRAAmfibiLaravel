<?php

use App\Http\Controllers\API\CarController;
use App\Http\Controllers\API\ShowroomController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [UserController::class, 'getAllUser']);
Route::get('/users/{id}', [UserController::class, 'getUserById']);
Route::post('/users', [UserController::class, 'createUser']);
Route::put('/users/{id}', [UserController::class, 'updateUser']);
Route::delete('/users/{id}', [UserController::class, 'deleteUser']);

Route::get('showrooms', [ShowroomController::class, 'getAllShowrooms']);
Route::get('showrooms/{id}', [ShowroomController::class, 'getShowroomById']);
Route::post('showrooms', [ShowroomController::class, 'createShowroom']);
Route::put('showrooms/{id}', [ShowroomController::class, 'updateShowroom']);
Route::delete('showrooms/{id}', [ShowroomController::class, 'deleteShowroom']);

Route::get('cars', [CarController::class, 'getAllCars']);
Route::get('cars/{id}', [CarController::class, 'getCarById']);
Route::post('cars', [CarController::class, 'createCar']);
Route::put('cars/{id}', [CarController::class, 'updateCar']);
Route::delete('cars/{id}', [CarController::class, 'deleteCar']);
