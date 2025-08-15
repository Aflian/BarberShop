<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'role',
        'active',
        'working_days',
        'start_time',
        'end_time',
    ];

    protected $casts = [
        'working_days' => 'array',
        'active' => 'boolean',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
