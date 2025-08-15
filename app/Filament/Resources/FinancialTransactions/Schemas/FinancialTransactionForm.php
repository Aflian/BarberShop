<?php

namespace App\Filament\Resources\FinancialTransactions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FinancialTransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('date')
                    ->label('Tanggal Transaksi')
                    ->required()
                    ->native(false) // datepicker modern
                    ->displayFormat('d/m/Y')
                    ->placeholder('Pilih tanggal transaksi'),

                Select::make('type')
                    ->label('Tipe Transaksi')
                    ->options([
                        'income'  => 'Pemasukan',
                        'expense' => 'Pengeluaran',
                    ])
                    ->required()
                    ->searchable(),

                TextInput::make('category')
                    ->label('Kategori')
                    ->placeholder('Contoh: Penjualan, Gaji, Operasional')
                    ->required(),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->placeholder('Tuliskan detail transaksi')
                    ->rows(3),

                TextInput::make('amount')
                    ->label('Jumlah')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),

                TextInput::make('related_id')
                    ->label('ID Referensi')
                    ->numeric()
                    ->placeholder('Masukkan ID referensi jika ada'),

                TextInput::make('related_type')
                    ->label('Tipe Referensi')
                    ->placeholder('Contoh: Booking, Payment, Order'),
            ]);
    }
}
