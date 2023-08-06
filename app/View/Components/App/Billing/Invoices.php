<?php

namespace App\View\Components\App\Billing;

use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Illuminate\View\Component;
use Laravel\Cashier\Invoice;

class Invoices extends Component
{
    public function render(): View
    {
        $invoices = auth()->user()->invoices()
            ->map(function (Invoice $invoice) {
                $subscription = Subscription::where('stripe_id', $invoice->subscription)->firstOrFail();
                $plan = Plan::getByStripeId($subscription->stripe_price);

                return (object) [
                    'id' => $invoice->id,
                    'name' => "Subscription to {$plan->name}",
                    'date' => Carbon::parse($invoice->date())->format('M d, Y'),
                    'total' => $invoice->total(),
                ];
            });

        return view(
            view: 'components.app.billing.invoices',
            data: compact('invoices')
        );
    }
}
