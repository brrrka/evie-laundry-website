<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanan';
    protected $primaryKey = 'id_layanan';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id_layanan',
        'nama_layanan',
        'biaya',
        'satuan',
        'deskripsi'
    ];
}
