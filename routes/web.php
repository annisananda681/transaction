<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransactionController;
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

Route::delete('/delete-data/{id}', [TransactionController::class, 'deleteData']);
Route::get('/update', [TransactionController::class, 'updatePage']);
Route::post('/update-data/{id}', [TransactionController::class, 'updateData']);
Route::post('/add-data', [TransactionController::class, 'addData']);
Route::get('/add', [TransactionController::class, 'addPage']);
Route::get('/', [TransactionController::class, 'index']);
Route::get('/logout', [AuthController::class, 'logOut']);
Route::post('/login-auth', [AuthController::class, 'loginAuth']);
Route::get('/login', [AuthController::class, 'index']);
