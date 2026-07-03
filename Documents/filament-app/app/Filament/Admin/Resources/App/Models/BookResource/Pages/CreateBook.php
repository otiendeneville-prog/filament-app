<?php

namespace App\Filament\Admin\Resources\App\Models\BookResource\Pages;

use App\Filament\Admin\Resources\App\Models\BookResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBook extends CreateRecord
{
    protected static string $resource = BookResource::class;
}
