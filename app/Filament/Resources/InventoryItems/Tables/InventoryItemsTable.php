<?php

namespace App\Filament\Resources\InventoryItems\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Support\Icons\Heroicon;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class InventoryItemsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Barang')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('unit')
                    ->label('Satuan')
                    ->badge() // tampilkan unit sebagai badge warna
                    ->color('info')
                    ->sortable(),

                TextColumn::make('stock')
                    ->label('Stok')
                    ->numeric()
                    ->sortable()
                    ->color(fn ($record) => $record->stock <= $record->min_stock ? 'danger' : 'success')
                    ->formatStateUsing(fn ($state) => number_format($state)),

                TextColumn::make('min_stock')
                    ->label('Stok Minimum')
                    ->numeric()
                    ->sortable()
                    ->formatStateUsing(fn ($state) => number_format($state)),

                TextColumn::make('cost_price')
                    ->label('Harga Modal')
                    ->numeric()
                    ->sortable()
                    ->prefix('Rp ')
                    ->formatStateUsing(fn ($state) => number_format($state, 0, ',', '.')),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                // Bisa ditambahkan filter stok rendah, misalnya
            ])
            ->recordActions([
                EditAction::make()->label('Edit')
                    ->icon('heroicon-o-pencil-square'),
                EditAction::make()->label('Edit')
                    ->icon(Heroicon::Trash)
                    ->color('danger'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()->label('Hapus Terpilih'),
                ]),
            ]);
    }
}
