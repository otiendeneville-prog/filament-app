<?php

namespace App\Filament\App\Resources\App\Models\BookResource\Pages;

use App\Filament\App\Resources\App\Models\BookResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBooks extends ListRecords
{
    protected static string $resource = BookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
