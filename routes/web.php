<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TransactionDetailController;
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

// Staff Section
Route::get('/staff', [StaffController::class, 'staffpage'])->name('staff');
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



// Customer section
Route::get('/customer', [CustomerController::class, 'customerpage'])->name('customer');
// Create Customer
Route::get('customer/create', [CustomerController::class, 'create'])->name('customer.create');
// Save Customer
Route::post('customer', [CustomerController::class, 'store'])->name('customer.store');
// Edit Customer
Route::get('customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
// Update Customer
Route::put('customer/edit/{id}', [CustomerController::class, 'update'])->name('customer.update');
// Delete Customer
Route::get('customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');

// Layanan Section
Route::get('/layanan', [LayananController::class, 'layananpage'])->name('layanan');
// Create Layanan
Route::get('layanan/create', [LayananController::class, 'create'])->name('layanan.create');
// Save Layanan
Route::post('layanan', [LayananController::class, 'store'])->name('layanan.store');
// Delete Layanan
Route::get('layanan/delete/{id}', [LayananController::class, 'delete'])->name('layanan.delete');



// Transaction Detail
Route::get('/transaksi', [TransactionDetailController::class, 'layananpage'])->name('transaksi');
// Create transaksi
Route::get('transaksi/create', [TransactionDetailController::class, 'create'])->name('transaksi.create');
// Save transaksi
Route::post('transaksi', [TransactionDetailController::class, 'store'])->name('transaksi.store');
// Delete transaksi
Route::get('transaksi/delete/{id}', [TransactionDetailController::class, 'delete'])->name('transaksi.delete');








Route::get('/selesai', [TransactionDetailController::class, 'pesananselesai'])->name('selesai');


require __DIR__.'/auth.php';


