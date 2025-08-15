<?php

namespace App\Filament\Resources\InventoryMovements\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class InventoryMovementsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('item.name') // relasi dari model
                    ->label('Item')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('type')
                    ->label('Tipe')
                    ->badge()
                    ->colors([
                        'success' => 'in',
                        'danger'  => 'out',
                        'warning' => 'usage',
                    ])
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'in'    => 'Masuk',
                        'out'   => 'Keluar',
                        'usage' => 'Pemakaian',
                        default => ucfirst($state),
                    }),

                TextColumn::make('quantity')
                    ->numeric(decimalPlaces: 0, thousandsSeparator: ',')
                    ->sortable()
                    ->label('Jumlah'),

                TextColumn::make('unit_cost')
                    ->money('IDR', true)
                    ->sortable()
                    ->label('Harga Satuan'),

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
                // Tambahkan filter jika perlu
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
