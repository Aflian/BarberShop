<?php

namespace App\Filament\Resources\Hairstyles;

use App\Filament\Resources\Hairstyles\Pages\CreateHairstyle;
use App\Filament\Resources\Hairstyles\Pages\EditHairstyle;
use App\Filament\Resources\Hairstyles\Pages\ListHairstyles;
use App\Filament\Resources\Hairstyles\Schemas\HairstyleForm;
use App\Filament\Resources\Hairstyles\Tables\HairstylesTable;
use App\Models\Hairstyle;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HairstyleResource extends Resource
{
    protected static ?string $model = Hairstyle::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Scissors;

    protected static string | UnitEnum | null $navigationGroup = 'Layanan';
    public static function form(Schema $schema): Schema
    {
        return HairstyleForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HairstylesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHairstyles::route('/'),
            'create' => CreateHairstyle::route('/create'),
            'edit' => EditHairstyle::route('/{record}/edit'),
        ];
    }
}
