<?php

namespace App\Filament\Resources\Downloadables\Pages;

use App\Filament\Resources\Downloadables\DownloadablesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDownloadables extends ListRecords
{
    protected static string $resource = DownloadablesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
