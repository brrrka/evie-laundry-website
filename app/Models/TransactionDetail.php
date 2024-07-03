<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $table = 'transaction_details';
    protected $fillable = [
        'no_pesanan',
        'id_layanan',
        'kuantitas',
        'total_biaya',
        'metode_pembayaran',
        'status_pembayaran',
        'nama_customer'
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
    public function header()
    {
        return $this->belongsTo(TransactionHeader::class);
    }
}
