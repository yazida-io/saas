<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public function render(): View
    {
        return view('components.navbar', [
            'links' => self::getLinks(),
        ]);
    }

    public static function getLinks()
    {
        return [
            [
                'name' => 'Features',
                'route' => 'pages.features',
            ],
            [
                'name' => 'Pricing',
                'route' => 'pages.pricing',
            ],
            [
                'name' => 'About',
                'route' => 'pages.about',
            ],
            [
                'name' => 'Contact',
                'route' => 'pages.contact',
            ],
        ];
    }
}
