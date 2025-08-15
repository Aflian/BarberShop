<?php

namespace App\Filament\Resources\Staff\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class StaffForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Lengkap')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->maxLength(255),

                TextInput::make('phone')
                    ->label('Nomor Telepon')
                    ->tel()
                    ->maxLength(20),

                Select::make('role')
                    ->label('Posisi / Role')
                    ->options([
                        'barber' => 'Barber',
                        'admin' => 'Admin',
                        'cashier' => 'Kasir',
                    ])
                    ->default('barber')
                    ->required(),

                Toggle::make('active')
                    ->label('Aktif?')
                    ->default(true),

                Textarea::make('working_days')
                    ->label('Hari Kerja')
                    ->placeholder('Contoh: Senin, Selasa, Rabu')
                    ->rows(2),

                TimePicker::make('start_time')
                    ->label('Jam Mulai Kerja')
                    ->seconds(false),

                TimePicker::make('end_time')
                    ->label('Jam Selesai Kerja')
                    ->seconds(false),
            ]);
    }
}
