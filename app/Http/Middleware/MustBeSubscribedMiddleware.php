<?php

namespace App\Http\Middleware;

use App\Models\Subscription;
use Closure;
use Illuminate\Http\Request;

class MustBeSubscribedMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (! auth()->user()->subscribed(Subscription::DEFAULT_SUBSCRIPTION)) {
            return redirect()->route('app.settings.subscriptions');
        }

        return $next($request);
    }
}
