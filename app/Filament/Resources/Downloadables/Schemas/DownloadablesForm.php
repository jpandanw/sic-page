<?php

namespace App\Filament\Resources\Downloadables\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DownloadablesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')->label('Title')->required(),

            Toggle::make('is_published'),
            FileUpload::make('image_url')
                ->label('Image')
                ->directory('uploads')
                ->visibility('public'),
        ]);
    }
}
