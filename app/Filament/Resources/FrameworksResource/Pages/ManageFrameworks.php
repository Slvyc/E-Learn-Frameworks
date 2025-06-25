<?php

namespace App\Filament\Resources\FrameworksResource\Pages;

use App\Filament\Resources\FrameworksResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFrameworks extends ManageRecords
{
    protected static string $resource = FrameworksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
