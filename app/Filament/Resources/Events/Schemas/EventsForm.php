<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EventsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required(),

                FileUpload::make('image_url')
                    ->label('Image')
                    ->disk('public')
                    ->directory('uploads')
                    ->visibility('public')
                    ->image()
                    ->imageEditor(),

                DateTimePicker::make('start_date')
                    ->label('Start Date')
                    ->required(),

                DateTimePicker::make('end_date')
                    ->label('End Date'),

                TextInput::make('location')
                    ->label('Location'),

                RichEditor::make('description')
                    ->label('Description'),

                Toggle::make('is_published')
                    ->label('Publish?'),
            ]);
    }
}
