<?php

namespace App\Http\Controllers;

use App\Http\Requests\Notification\NotificationRequest;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Notification::class);

        return Notification::all();
    }

    public function store(NotificationRequest $request)
    {
        $this->authorize('create', Notification::class);

        return Notification::create($request->validated());
    }

    public function show(Notification $notification)
    {
        $this->authorize('view', $notification);

        return $notification;
    }

    public function update(NotificationRequest $request, Notification $notification)
    {
        $this->authorize('update', $notification);

        $notification->update($request->validated());

        return $notification;
    }

    public function destroy(Notification $notification)
    {
        $this->authorize('delete', $notification);

        $notification->delete();

        return response()->json();
    }
}
