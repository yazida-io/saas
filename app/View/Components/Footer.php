<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public function render(): View
    {
        return view('components.footer', [
            'links' => $this->getLinks(),
            'terms' => $this->getTerms(),
        ]);
    }

    private function getLinks(): array
    {
        return [
            ['name' => 'About', 'route' => 'pages.about'],
            ['name' => 'Contact', 'route' => 'pages.contact'],
        ];
    }

    private function getTerms(): array
    {
        return [
            ['name' => 'Privacy policy', 'route' => route('pages.dynamic', ['page' => 'privacy'])],
            ['name' => 'Term of service', 'route' => route('pages.dynamic', ['page' => 'terms'])],
        ];
    }
}
