<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\Frameworks;
use App\Models\Progress;
use App\Models\User;
use App\Models\Chapters;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.dashboard';
    
    public function getViewData(): array
    {
        return [
            'totalFrameworks' => Frameworks::count(),
            'totalProgress' => Progress::count(),
            'totalUsers' => User::count(),
            'totalChapters' => Chapters::count(),
        ];
    }
}

