<?php

namespace App\Filament\User\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),

                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),

                Select::make('roles')
                    ->options([
                        'admin' => 'Admin',
                        'pelanggan' => 'Pelanggan',
                    ])
                    ->default('pelanggan')
                    ->required()
                    // hanya admin yang bisa ubah role
                    ->disabled(fn () => Auth::user()->roles !== 'admin'),

                DateTimePicker::make('email_verified_at'),

                TextInput::make('password')
                    ->password()
                    ->required(),
            ]);
    }
}
