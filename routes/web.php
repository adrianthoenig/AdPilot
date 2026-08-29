<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
});

/***** DASHBOARD ROUTES *****/

// DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// DASHBOARD -> CLIENTS
Route::get('/dashboard/clients', [ClientController::class, 'index'])->name('dashboard.client.index');