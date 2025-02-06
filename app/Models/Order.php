<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'note',
        'discount',
        'delivery_charge',
        'service_charge',
        'type',
        'table_id',
        'payment_method_id',
        'amount',
        'payment_status',
    ];
}
