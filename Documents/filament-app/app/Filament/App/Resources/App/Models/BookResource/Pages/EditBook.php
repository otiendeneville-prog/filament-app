<?php

namespace App\Filament\App\Resources\App\Models\BookResource\Pages;

use App\Filament\App\Resources\App\Models\BookResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBook extends EditRecord
{
    protected static string $resource = BookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
