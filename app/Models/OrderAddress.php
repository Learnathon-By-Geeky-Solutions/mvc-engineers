<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderAddress extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_id',
        'address',
        'city',
        'postal_code',
    ];
}
