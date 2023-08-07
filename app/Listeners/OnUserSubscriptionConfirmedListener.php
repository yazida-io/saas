<?php

namespace App\Listeners;

use App\Events\UserSubscriptionConfirmed;
use App\Mail\SubscriptionConfirmed;
use Illuminate\Support\Facades\Mail;

class OnUserSubscriptionConfirmedListener
{
    public function __construct()
    {
    }

    public function handle(UserSubscriptionConfirmed $event): void
    {
        $user = $event->user->name;
        $url = route('app.settings.billing.invoices.download', $event->invoice->id);

        Mail::to($event->user->email)
            ->send(new SubscriptionConfirmed(
                data: compact('user', 'url')
            ));
    }
}
