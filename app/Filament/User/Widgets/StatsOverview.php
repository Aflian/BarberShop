<?php

namespace App\Filament\User\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Bookings', \App\Models\Booking::count()),
            Stat::make('Pending', \App\Models\Booking::where('status', 'pending')->count()),
            Stat::make('Completed', \App\Models\Booking::where('status', 'completed')->count()),
        ];
    }
}
