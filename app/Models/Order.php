<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'address',
        'repair_type',
        'date_time',
        'pay_type',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
