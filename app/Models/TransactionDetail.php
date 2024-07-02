<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $table = 'transaction_details';
    protected $fillable = [
        'id layanan',
        'kuantitas',
        'total_biaya',
        'metode_pembayaran',
        'status_pembayaran',
    ];
}
