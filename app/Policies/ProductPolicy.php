<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Product $product): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Product $product): bool
    {
    }

    public function delete(User $user, Product $product): bool
    {
    }

    public function restore(User $user, Product $product): bool
    {
    }

    public function forceDelete(User $user, Product $product): bool
    {
    }
}
