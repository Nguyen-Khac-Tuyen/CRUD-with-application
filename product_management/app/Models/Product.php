<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable = [
        'id',
        'name',
        'address'
        'phone',
        'email',
        'salary',
        'product_name',
        'product_desc',
        'product_qty',
    ];
}
