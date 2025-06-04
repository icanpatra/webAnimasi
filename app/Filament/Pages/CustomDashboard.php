<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\TotalBerita;
use App\Filament\Widgets\TotalPrestasi;



use Filament\Pages\Page;

class CustomDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.custom-dashboard';

    public static function getWidgets(): array
{
    return [
        TotalBerita::class,
        TotalPrestasi::class,
    ];
}

    public function getTitle(): string
    {
        return 'Dashboard';
    }

    public static function getNavigationLabel(): string
    {
        return 'Dashboard';
    }
}
