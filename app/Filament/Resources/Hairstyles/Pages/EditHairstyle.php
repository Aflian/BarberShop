<?php

namespace App\Filament\Resources\Hairstyles\Pages;

use App\Filament\Resources\Hairstyles\HairstyleResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHairstyle extends EditRecord
{
    protected static string $resource = HairstyleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
