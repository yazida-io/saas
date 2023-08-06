<?php

namespace App\Http\Controllers\App\Settings;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Subscription;
use Laravel\Cashier\Invoice;

class InvoiceController extends Controller
{
    public function download(string $invoiceId)
    {
        /** @var Invoice $invoice */
        $invoice = auth()->user()->findInvoice($invoiceId);

        $subscription = Subscription::where('stripe_id', $invoice->subscription)->firstOrFail();

        $plan = Plan::getByStripeId($subscription->stripe_price);

        return auth()->user()->downloadInvoice(
            $invoiceId,
            [
                'vendor' => config('app.name'),
                'product' => "Subscription to $plan->name",
                'street' => '1 Rue de Paris',
                'location' => '75001 Paris',
                'phone' => '+33 499 00 00 00',
                'email' => config('mail.from.address'),
                'url' => config('app.url'),
                'vendorVat' => 'FR00000000000',
            ]
        );
    }
}
