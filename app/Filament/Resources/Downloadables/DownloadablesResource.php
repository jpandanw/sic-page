<?php

namespace App\Filament\Resources\Downloadables;

use App\Filament\Resources\Downloadables\Pages\CreateDownloadables;
use App\Filament\Resources\Downloadables\Pages\EditDownloadables;
use App\Filament\Resources\Downloadables\Pages\ListDownloadables;
use App\Filament\Resources\Downloadables\Pages\ViewDownloadables;
use App\Filament\Resources\Downloadables\Schemas\DownloadablesForm;
use App\Filament\Resources\Downloadables\Schemas\DownloadablesInfolist;
use App\Filament\Resources\Downloadables\Tables\DownloadablesTable;
use App\Models\Downloadable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DownloadablesResource extends Resource
{
    protected static ?string $model = Downloadable::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Downloadable';

    public static function form(Schema $schema): Schema
    {
        return DownloadablesForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DownloadablesInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DownloadablesTable::configure($table);
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
            'index' => ListDownloadables::route('/'),
            'create' => CreateDownloadables::route('/create'),
            'view' => ViewDownloadables::route('/{record}'),
            'edit' => EditDownloadables::route('/{record}/edit'),
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
