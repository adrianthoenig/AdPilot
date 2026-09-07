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
Route::get('/dashboard/clients', [ClientController::class, 'index'])->name('dashboard.clients.index');
Route::get('/dashboard/clients/create', [ClientController::class, 'create'])->name('dashboard.clients.create');
Route::post('/dashboard/clients', [ClientController::class, 'store'])->name('dashboard.clients.store');
Route::get('/dashboard/clients/{client}', [ClientController::class, 'show'])->name('dashboard.clients.show');
Route::get('/dashboard/clients/{client}/edit', [ClientController::class, 'edit'])->name('dashboard.clients.edit');
Route::put('/dashboard/clients/{client}', [ClientController::class, 'update'])->name('dashboard.clients.update');
Route::delete('/dashboard/clients/{client}', [ClientController::class, 'destroy'])->name('dashboard.clients.destroy');