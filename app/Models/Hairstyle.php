<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hairstyle extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image_path',
    ];
}
