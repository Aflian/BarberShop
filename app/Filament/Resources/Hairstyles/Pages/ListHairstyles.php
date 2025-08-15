<?php

namespace App\Filament\Resources\Hairstyles\Pages;

use App\Filament\Resources\Hairstyles\HairstyleResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHairstyles extends ListRecords
{
    protected static string $resource = HairstyleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
