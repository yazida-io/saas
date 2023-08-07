<?php

namespace App\Http\Controllers\App\Settings;

use App\Events\UserSubscriptionConfirmed;
use App\Http\Controllers\Controller;
use App\Http\Requests\App\Settings\SubscribeRequest;
use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Http\JsonResponse;

class SubscriptionController extends Controller
{
    public function subscribe(SubscribeRequest $request): JsonResponse
    {
        $data = $request->validated();

        $plan = Plan::findOrFail($data['plan']);

        $user = auth()->user();

        $user->createOrGetStripeCustomer();

        $user->updateDefaultPaymentMethod($data['payment_method']);

        $subscription = $user->newSubscription(
            name: Subscription::DEFAULT_SUBSCRIPTION,
            prices: $plan->stripe_price_id
        )->create();

        $user->update(['plan_id' => $plan->id]);

        event(new UserSubscriptionConfirmed($user, $plan, $subscription->invoice()));

        return response()->json([
            'message' => "You've successfully subscribed to {$plan->name} !",
        ]);
    }
}
