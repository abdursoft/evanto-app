<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'email',
        'domain',
        'status',
        'company',
        'address',
        'product_id',
        'purchase_code',
    ];
}
