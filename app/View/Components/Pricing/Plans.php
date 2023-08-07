<?php

namespace App\View\Components\Pricing;

use App\Models\Plan;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Plans extends Component
{
    public function render(): View
    {
        $plans = Plan::all()->toArray();

        return view('components.pricing.plans', compact('plans'));
    }
}
