<?php

namespace App\Filament\User\Resources\Bookings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;

class BookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                    Hidden::make('user_id')
                    ->default(auth()->id())
                    ->required(),

                    Select::make('staff_id')
                        ->label('Staff')
                        ->relationship('staff', 'name')
                        ->searchable(),

                    Select::make('service_id')
                        ->label('Service')
                        ->relationship('service', 'name')
                        ->searchable()
                        ->required(),

                    DatePicker::make('date')
                        ->label('Booking Date')
                        ->required(),

                    TimePicker::make('start_time')
                        ->label('Start Time')
                        ->required(),

                    TimePicker::make('end_time')
                        ->label('End Time')
                        ->required(),

                    Select::make('status')
                        ->label('Status')
                        ->options([
                            'pending' => 'Pending',
                            'confirmed' => 'Confirmed',
                            'in_service' => 'In Service',
                            'completed' => 'Completed',
                            'cancelled' => 'Cancelled',
                        ])
                        ->default('pending')
                        ->disabled()
                        ->required(),

                    Textarea::make('notes')
                        ->label('Notes')
                        ->columnSpanFull(),

                    TextInput::make('total_price')
                        ->label('Total Price')
                        ->numeric()
                        ->required()
                        ->prefix('Rp'),
                        ]);
    }
}
