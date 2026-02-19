<?php

namespace App\Filament\Resources\Downloadables\Pages;

use App\Filament\Resources\Downloadables\DownloadablesResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewDownloadables extends ViewRecord
{
    protected static string $resource = DownloadablesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
