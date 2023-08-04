<?php

namespace App\View\Components\Pricing;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Plans extends Component
{
    public function render(): View
    {
        $plans = $this->getPlans();

        return view('components.pricing.plans', compact('plans'));
    }

    private function getPlans(): array
    {
        return [
            [
                'color' => '-',
                'name' => 'Basic',
                'description' => 'Al chatbot, personalized recommendations',
                'price' => 7.99,
                'features' => [
                    '1 GB of space',
                    'Support at $25/hour',
                    '1 email address',
                    '1 domain name',
                ],
            ],
            [
                'color' => '#6A8E7F',
                'name' => 'Gold 🌟',
                'description' => 'Advanced Al chatbot, priority support, analytics dashboard',
                'price' => 19.9,
                'bestValue' => true,
                'features' => [
                    '5 GB of space',
                    'Support at $15/hour',
                    '10 email addresses',
                    '10 domain names',
                ],
            ],
            [
                'color' => '#f9a03f',
                'name' => 'Platinum',
                'description' => 'For a large business or organization.',
                'price' => 49.99,
                'features' => [
                    '10 GB of space',
                    'Support at $5/hour',
                    '100 email addresses',
                    '100 domain names',
                ],
            ],
        ];
    }
}
