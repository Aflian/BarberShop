<?php

namespace App\Filament\Resources\InventoryItems\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class InventoryItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')
                ->label('Item Name')
                ->placeholder('Masukkan nama item')
                ->required(),

            TextInput::make('unit')
                ->label('Satuan')
                ->placeholder('pcs, box, kg, dll.')
                ->required()
                ->default('pcs'),

            TextInput::make('stock')
                ->label('Stok Saat Ini')
                ->numeric()
                ->required()
                ->default(0),

            TextInput::make('min_stock')
                ->label('Stok Minimum')
                ->numeric()
                ->required()
                ->default(0)
                ->helperText('Peringatan akan muncul jika stok di bawah angka ini.'),

            TextInput::make('cost_price')
                ->label('Harga Modal')
                ->numeric()
                ->prefix('Rp')
                ->required()
                ->default(0),
        ]);
    }
}
