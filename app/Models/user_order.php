<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_order extends Model
{
    use HasFactory;
    protected $table = 'user_order';
    protected $fillable = [
        'order_id',
        'email',
        'orders',
        'quantity',
        'price',
        'status',
    ];
}
