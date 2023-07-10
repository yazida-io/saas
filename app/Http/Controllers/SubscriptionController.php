<?php

namespace App\Http\Controllers;

use App\Http\Requests\Subscription\SubscriptionRequest;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Subscription::class);

        return Subscription::all();
    }

    public function store(SubscriptionRequest $request)
    {
        $this->authorize('create', Subscription::class);

        return Subscription::create($request->validated());
    }

    public function show(Subscription $subscription)
    {
        $this->authorize('view', $subscription);

        return $subscription;
    }

    public function update(SubscriptionRequest $request, Subscription $subscription)
    {
        $this->authorize('update', $subscription);

        $subscription->update($request->validated());

        return $subscription;
    }

    public function destroy(Subscription $subscription)
    {
        $this->authorize('delete', $subscription);

        $subscription->delete();

        return response()->json();
    }
}
