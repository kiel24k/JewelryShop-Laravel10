<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_list extends Model
{
    use HasFactory;
    protected $table = 'user_lists';
    protected $fillable = [
        'email',
        'address',
        'password',
    ];
    public $timestamps = false;
}
