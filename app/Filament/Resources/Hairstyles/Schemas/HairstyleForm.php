<?php

namespace App\Filament\Resources\Hairstyles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class HairstyleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Gaya Rambut')
                    ->placeholder('Contoh: Pompadour, Undercut, Fade')
                    ->required()
                    ->maxLength(100),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->placeholder('Jelaskan detail gaya rambut...')
                    ->rows(4)
                    ->columnSpanFull(),

                FileUpload::make('image_path')
                    ->label('Foto Gaya Rambut')
                    ->image()
                    ->imagePreviewHeight('150')
                    ->loadingIndicatorPosition('left')
                    ->disk('public')
                    ->directory('hair')
                    ->visibility('public')
                    ->preserveFilenames()
                    ->required(),
            ]);
    }
}
