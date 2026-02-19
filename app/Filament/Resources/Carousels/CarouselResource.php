<?php

namespace App\Filament\Resources\Carousels;

use App\Filament\Resources\Carousels\Pages\CreateCarousel;
use App\Filament\Resources\Carousels\Pages\EditCarousel;
use App\Filament\Resources\Carousels\Pages\ListCarousels;
use App\Filament\Resources\Carousels\Pages\ViewCarousel;
use App\Filament\Resources\Carousels\Schemas\CarouselForm;
use App\Filament\Resources\Carousels\Schemas\CarouselInfolist;
use App\Filament\Resources\Carousels\Tables\CarouselsTable;
use App\Models\Carousel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarouselResource extends Resource
{
    protected static ?string $model = Carousel::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Carousel';

    public static function form(Schema $schema): Schema
    {
        return CarouselForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CarouselInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CarouselsTable::configure($table);
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
            'index' => ListCarousels::route('/'),
            'create' => CreateCarousel::route('/create'),
            'view' => ViewCarousel::route('/{record}'),
            'edit' => EditCarousel::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
