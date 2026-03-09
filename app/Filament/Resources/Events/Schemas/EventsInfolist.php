<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;

class EventsInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextColumn::make('title')
                    ->label('Title'),

                TextColumn::make('start_date')
                    ->label('Start Date')
                    ->dateTime(),

                TextColumn::make('end_date')
                    ->label('End Date')
                    ->dateTime(),

                TextColumn::make('location')
                    ->label('Location'),

                TextColumn::make('description')
                    ->label('Description')
                    ->html(),

                TextColumn::make('is_published')
                    ->label('Published')
                    ->badge()
                    ->color(fn (bool $state) => $state ? 'success' : 'danger')
                    ->formatStateUsing(fn (bool $state) => $state ? 'Yes' : 'No'),
            ]);
    }
}
