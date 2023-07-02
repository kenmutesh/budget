<?php

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


Route::middleware('guest')->group(function (){
    Route::get('/', function (){
        return view('welcome');
    });

    Route::get('/login', [\App\Http\Controllers\auth\AuthController::class, 'index'])->name('login');
    Route::post('/login-post', [\App\Http\Controllers\auth\AuthController::class, 'login'])->name('login.post');
    Route::get('/register', [\App\Http\Controllers\auth\AuthController::class, 'index'])->name('register');
    Route::post('/register-user', [\App\Http\Controllers\auth\AuthController::class, 'store'])->name('register.post');
    Route::get('/password', [\App\Http\Controllers\auth\AuthController::class, 'index'])->name('password.request');

});
Route::middleware('auth','checkBudget')->group(function (){
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

Route::get('/fill-budget', [\App\Http\Controllers\EstimateBudgetController::class, 'index'])->name('fill-budget');
Route::post('/set-budget', [\App\Http\Controllers\EstimateBudgetController::class, 'store'])->name('set-budget');
