<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use App\Models\Prestasi;

class TotalPrestasi extends Widget
{
    protected static string $view = 'filament.widgets.total-prestasi';

    public function render(): \Illuminate\View\View
    {
        return view('filament.widgets.total-prestasi', [
            'count' => Prestasi::count(),
        ]);
    }
}
