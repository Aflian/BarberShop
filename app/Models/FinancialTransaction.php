<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinancialTransaction extends Model
{
    protected $fillable = [
        'date',
        'type',
        'category',
        'description',
        'amount',
        'related_id',
        'related_type',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
