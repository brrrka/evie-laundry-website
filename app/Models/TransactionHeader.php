<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    use HasFactory;

    protected $table = 'transaction_headers';

    protected $fillable = [
        'tanggal_masuk',
        'no_pesanan',
        'cust_id',
        'staff_id',
    ];
    

    public function transactiondetails()
    {
        return $this->hasMany(TransactionDetail::class);
    }
}
