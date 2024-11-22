<?php

use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/ticket/{ticket}/status', [AdminDashboardController::class, 'updateTicketStatus'])->name('ticket.updateStatus');

Route::post('/ticket/{ticket}/assign/{operator}', [AdminDashboardController::class, 'assignTicketOperator'])->name('ticket.assignOperator');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('login', [LoginController::class, 'login']);

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Route::post('register', [RegisterController::class, 'register']);

Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');