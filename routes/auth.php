<?php

/**
 * 
 * GET -> /login -> login page
 * POST -> /login -> login action
 * 
 * GET -> /signup -> register page
 * POST -> /signup -> signup action
 * 
 * POST -> /logout
 * 
 */

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login_view'])->name('login.view');
Route::post('/login', [AuthController::class, 'login_action'])->name('login.action');
Route::get('/signup', [AuthController::class, 'signup_view'])->name('signup.view');
Route::post('/signup', [AuthController::class, 'signup_action'])->name('signup.action');
Route::post('/logout', [AuthController::class, 'logout_action'])->name('logout.action');
