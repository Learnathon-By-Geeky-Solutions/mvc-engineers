<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'table_id',
        'name',
        'email',
        'phone',
        'sit_required',
        'note',
        'status',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            do {
                $randomId = mt_rand(10000, 99999); // Generate a 5-digit number
            } while (self::where('id', $randomId)->exists()); // Ensure uniqueness

            $model->id = (string) $randomId; // Assign as primary key
        });
    }
}
