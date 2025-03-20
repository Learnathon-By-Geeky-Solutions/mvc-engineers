<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurant extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'type',
        'description',
        'cuisine',
        'address',
        'city',
        'postal_code',
        'website',
        'opening_time',
        'closing_time',
        'days_open',
        'logo',
        'photos',
        'status',
    ];
}
