<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Features extends Component
{
    public function render(): string
    {
        $features = $this->getFeatures();

        return view('components.home.features', compact('features'));
    }

    private function getFeatures(): array
    {
        return [
            [
                'title' => '70+ million songs',
                'description' => 'Tonality brings you closer to the artists you listen to.',
            ],
            [
                'title' => 'Videos and Livestreams',
                'description' => 'Watch over 250,000 high-quality videos.',
            ],
            [
                'title' => 'Elevate your sound',
                'description' => 'No compromises. Just pure sound.',
            ],
            [
                'title' => 'Anytime. Anywhere.',
                'description' => 'A world of music in your pocket.',
            ],
        ];
    }
}
