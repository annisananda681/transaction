<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
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

Route::delete('/users/delete/{id}', [UserController::class, 'deleteData']);
Route::get('/users/update/{id}', [UserController::class, 'updatePage']);
Route::post('/users/update-data', [UserController::class, 'updateData']);
Route::post('/users/add-data', [UserController::class, 'addData']);
Route::get('/users/add', [UserController::class, 'addPage']);
Route::get('/', [UserController::class, 'index']);
Route::delete('/transactions/delete/{id}', [TransactionController::class, 'deleteData']);
Route::get('/transactions/update/{id}', [TransactionController::class, 'updatePage']);
Route::post('/transactions/update-data', [TransactionController::class, 'updateData']);
Route::post('/transactions/add-data', [TransactionController::class, 'addData']);
Route::get('/transactions/add', [TransactionController::class, 'addPage']);
Route::get('/', [TransactionController::class, 'index']);
Route::get('/logout', [AuthController::class, 'logOut']);
Route::post('/login-auth', [AuthController::class, 'loginAuth']);
Route::get('/login', [AuthController::class, 'index']);
