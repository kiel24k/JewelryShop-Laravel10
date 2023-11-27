<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user_list extends Authenticatable
{
    use HasFactory;

    protected $table = 'user_lists';
    protected $fillable = [
        'email',
        'address',
        'type',
        'password',
    ];
    public $timestamps = false;
    protected $hidden =[

    ];
}
