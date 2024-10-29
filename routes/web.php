<?php

use App\Http\Controllers\AdminPusatDashboardController;
use App\Http\Controllers\MemberRegistrasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RekaptulationController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get("users", [UserManagementController::class, 'index'])->name('user.index');
Route::resource('dashboard/admin', AdminPusatDashboardController::class);
Route::resource('users', UserManagementController::class);
Route::resource('rekaps', RekaptulationController::class);
Route::resource('member', MemberRegistrasiController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
