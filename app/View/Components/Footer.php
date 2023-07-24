<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public function render(): View
    {
        return view('components.footer', [
            'links' => Navbar::getLinks(),
        ]);
    }
}
