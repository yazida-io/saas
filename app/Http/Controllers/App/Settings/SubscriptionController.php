<?php

namespace App\Http\Controllers\App\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\Settings\SubscribeRequest;
use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class SubscriptionController extends Controller
{
    public function index(): View
    {
        $intent = auth()->user()->createSetupIntent();
        $plans = Plan::all();
        $hasActiveSubscription = auth()->user()->subscriptions_count > 0;

        return view(
            view: 'app.settings.subscriptions',
            data: compact('intent', 'plans', 'hasActiveSubscription')
        );
    }

    public function subscribe(SubscribeRequest $request): JsonResponse
    {
        $data = $request->validated();

        $plan = Plan::findOrFail($data['plan']);

        $user = auth()->user();

        $user->createOrGetStripeCustomer();

        $user->updateDefaultPaymentMethod($data['payment_method']);

        $user->newSubscription(
            name: Subscription::DEFAULT_SUBSCRIPTION,
            prices: $plan->stripe_price_id
        )->create();

        return response()->json([
            'message' => "You've successfully subscribed to {$plan->name} !",
        ]);
    }
}
