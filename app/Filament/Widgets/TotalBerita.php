<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use App\Models\Berita;

class TotalBerita extends Widget
{
    protected static string $view = 'filament.widgets.total-berita';

    public function render(): \Illuminate\View\View
    {
        return view('filament.widgets.total-berita', [
            'count' => Berita::count(),
        ]);
    }
}
