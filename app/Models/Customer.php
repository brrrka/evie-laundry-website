<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'cust_id';

    protected $fillable = [
        'cust_id', 'nama_customer', 'alamat',
    ];

    public function transaction_header()
    {
        
    }

    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->cust_id)) {
                $model->cust_id = self::generateStaffId();
            }
        });
    }

    /**
     * Generate a staff ID with custom format.
     *
     * @return string
     */
    public static function generateStaffId()
    {
        $lastRecord = self::orderBy('cust_id', 'desc')->first();
        $lastId = $lastRecord ? intval(substr($lastRecord->cust_id, 1)) : 0;

        return 'C' . str_pad($lastId + 1, 3, '0', STR_PAD_LEFT);
    }
}
