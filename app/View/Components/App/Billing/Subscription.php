<?php

namespace App\View\Components\App\Billing;

use App\Models\Plan;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Subscription extends Component
{
    public function render(): View
    {
        $intent = auth()->user()->createSetupIntent();
        $plans = Plan::all();
        $hasActiveSubscription = auth()->user()->subscriptions_count > 0;

        return view(
            view: 'components.app.billing.subscription',
            data: compact('intent', 'plans', 'hasActiveSubscription')
        );
    }
}
