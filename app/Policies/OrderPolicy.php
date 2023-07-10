<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Order $order): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Order $order): bool
    {
    }

    public function delete(User $user, Order $order): bool
    {
    }

    public function restore(User $user, Order $order): bool
    {
    }

    public function forceDelete(User $user, Order $order): bool
    {
    }
}
