<?php

namespace App\Filament\Resources\Payments\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;

class PaymentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Relasi ke Booking
                Select::make('booking_id')
                    ->label('Booking')
                    ->relationship('booking', 'id') // atau ganti 'id' dengan kolom lain misalnya 'code'
                    ->searchable()
                    ->preload()
                    ->required(),

                // Relasi ke PaymentMethod
                Select::make('payment_method_id')
                    ->label('Metode Pembayaran')
                    ->relationship('method', 'name') // pastikan model Payment punya relasi paymentMethod()
                    ->searchable()
                    ->preload(),

                Select::make('status')
                    ->label('Status Pembayaran')
                    ->options([
                        'unpaid' => 'Unpaid',
                        'waiting_confirmation' => 'Waiting Confirmation',
                        'paid' => 'Paid',
                        'failed' => 'Failed',
                        'refunded' => 'Refunded',
                    ])
                    ->default('unpaid')
                    ->required(),

                TextInput::make('amount')
                    ->label('Jumlah Pembayaran')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),

                FileUpload::make('proof_path')
                    ->label('Bukti Pembayaran')
                    ->image()
                    ->imagePreviewHeight('150')
                    ->loadingIndicatorPosition('left')
                    ->disk('public')
                    ->directory('Bukti')
                    ->visibility('public')
                    ->preserveFilenames()
                    ->required(),

                DateTimePicker::make('paid_at')
                    ->label('Tanggal Dibayar')
                    ->placeholder('Pilih tanggal pembayaran'),
            ]);
    }
}
