<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    protected $fillable = [
        'name',
        'unit',
        'stock',
        'min_stock',
        'cost_price',
    ];

    public function movements()
    {
        return $this->hasMany(InventoryMovement::class);
    }
}
