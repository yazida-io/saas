<?php

namespace App\Policies;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NotificationPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Notification $notification): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Notification $notification): bool
    {
    }

    public function delete(User $user, Notification $notification): bool
    {
    }

    public function restore(User $user, Notification $notification): bool
    {
    }

    public function forceDelete(User $user, Notification $notification): bool
    {
    }
}
