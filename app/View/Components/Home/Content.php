<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Content extends Component
{
    public function render(): string
    {
        $features = $this->getFeatures();

        return view('components.home.content', compact('features'));
    }

    private function getFeatures(): array
    {
        return [
            ['icon' => 'icon-1', 'title' => '70+ million songs'],
            ['icon' => 'icon-1', 'title' => 'Videos and Livestreams'],
            ['icon' => 'icon-1', 'title' => 'High-fidelity sound quality'],
            ['icon' => 'icon-1', 'title' => 'Mixes and Radio'],
        ];
    }
}
