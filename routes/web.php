<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\DashboardController;

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

// * Auth
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registration'])->name('auth.registration');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword']);

// * Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
