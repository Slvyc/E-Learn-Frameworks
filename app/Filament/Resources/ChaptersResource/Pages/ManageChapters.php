<?php

namespace App\Filament\Resources\ChaptersResource\Pages;

use App\Filament\Resources\ChaptersResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageChapters extends ManageRecords
{
    protected static string $resource = ChaptersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
