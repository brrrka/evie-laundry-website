<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// NavLink
Route::get('/staff', [StaffController::class, 'staffpage'])->name('staff');
// Route::get('/transaction', [TransactionController::class, 'transactionpage'])->name('pesanan');
// Route::get('/pesanan', [CustomerController::class, 'customerpage'])->name('customer');

// Create Staff
Route::get('/staff/create', [StaffController::class, 'create'])->name('staff/create');
// Save staff
Route::post('staff/save', [StaffController::class, 'save'])->name('staff/save');
// Edit Staff
Route::get('staff/edit/{id}', [StaffController::class, 'edit'])->name('staff/edit');
// Update Staff
Route::put('staff/edit/{id}', [StaffController::class, 'update'])->name('staff/update'); 
// Hapus Staff
Route::get('staff/delete/{id}', [StaffController::class, 'delete'])->name('staff/delete');

require __DIR__.'/auth.php';


