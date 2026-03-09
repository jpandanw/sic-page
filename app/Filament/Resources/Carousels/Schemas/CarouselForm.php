<?php

namespace App\Filament\Resources\Carousels\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CarouselForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
                    ->label('Title')
                    ->required(),
                Toggle::make('is_published')
                    ->label('Publish?'),

                FileUpload::make('image_url')
                    ->label('Image')
                    ->disk('public')
                    ->directory('uploads')
                    ->visibility('public')
                    ->image()
                    ->imageEditor(),

            ]);
    }
}
