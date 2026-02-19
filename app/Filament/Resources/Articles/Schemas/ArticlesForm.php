<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Image;
use Filament\Schemas\Schema;

class ArticlesForm
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

                RichEditor::make('content')
                    ->label('Content')
                    ->required()
                    ->fileAttachments(true)
                    ->fileAttachmentsDirectory('uploads'),


            ]);
    }
}
