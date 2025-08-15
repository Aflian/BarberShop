<?php

namespace App\Filament\Resources\InventoryMovements\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use App\Models\InventoryItem;

class InventoryMovementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('inventory_item_id')
                ->label('Inventory Item')
                ->relationship('item', 'name') // sesuai relasi di model
                ->required(),

            Select::make('type')
                ->label('Movement Type')
                ->options([
                    'in'    => 'In',
                    'out'   => 'Out',
                    'usage' => 'Usage',
                ])
                ->required(),

            TextInput::make('quantity')
                ->label('Quantity')
                ->required()
                ->numeric()
                ->minValue(1),

            TextInput::make('unit_cost')
                ->label('Unit Cost')
                ->numeric()
                ->default(0)
                ->minValue(0),
        ]);
    }
}
