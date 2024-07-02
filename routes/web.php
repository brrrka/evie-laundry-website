<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TransactionController;
use App\Models\TransactionDetail;
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


// Layanan Section
Route::get('/layanan', [LayananController::class, 'layananpage'])->name('layanan');
// Create Layanan
Route::get('layanan/create', [LayananController::class, 'create'])->name('layanan.create');
// Save Layanan
Route::post('layanan', [LayananController::class, 'store'])->name('layanan.store');



// Transaction Detail
Route::get('/transaksi', [TransactionDetail::class, 'layananpage'])->name('transaksi');
// Create Layanan
Route::get('layanan/create', [TransactionDetail::class, 'create'])->name('transaksi.create');
// Save Layanan
Route::post('layanan', [TransactionDetail::class, 'store'])->name('transaksi.store');


require __DIR__.'/auth.php';


