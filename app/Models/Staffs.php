<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    use HasFactory;
    protected $table ='staffs';
    protected $primaryKey = 'staff_id';

    protected $fillable = [
        'staff_id', 'nama', 'role',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'staff_id', 'staff_id');
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
            if (empty($model->staff_id)) {
                $model->staff_id = self::generateStaffId();
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
        $lastRecord = self::orderBy('staff_id', 'desc')->first();
        $lastId = $lastRecord ? intval(substr($lastRecord->staff_id, 1)) : 0;

        return 'S' . str_pad($lastId + 1, 3, '0', STR_PAD_LEFT);
    }
}
