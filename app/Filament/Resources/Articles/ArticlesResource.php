<?php

namespace App\Filament\Resources\Articles;

use App\Filament\Resources\Articles\Pages\CreateArticles;
use App\Filament\Resources\Articles\Pages\EditArticles;
use App\Filament\Resources\Articles\Pages\ListArticles;
use App\Filament\Resources\Articles\Pages\ViewArticles;
use App\Filament\Resources\Articles\Schemas\ArticlesForm;
use App\Filament\Resources\Articles\Schemas\ArticlesInfolist;
use App\Filament\Resources\Articles\Tables\ArticlesTable;
use App\Models\Articles;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticlesResource extends Resource
{
    protected static ?string $model = Articles::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Articles';

    public static function form(Schema $schema): Schema
    {
        return ArticlesForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ArticlesInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ArticlesTable::configure($table);
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
            'index' => ListArticles::route('/'),
            'create' => CreateArticles::route('/create'),
            'view' => ViewArticles::route('/{record}'),
            'edit' => EditArticles::route('/{record}/edit'),
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
