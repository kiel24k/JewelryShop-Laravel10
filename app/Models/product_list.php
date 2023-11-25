<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_list extends Model
{
    use HasFactory;

    protected $table = 'product_lists';
    protected $fillable = [
       'product_id',
       'product_name',
       'product_description',
       'product_price',
       'product_quantity',

    ];
}
