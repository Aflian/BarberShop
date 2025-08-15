<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'duration_minutes',
        'price',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
