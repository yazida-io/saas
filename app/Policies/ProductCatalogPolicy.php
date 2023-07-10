<?php

namespace App\Policies;

use App\Models\ProductCatalog;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductCatalogPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, ProductCatalog $productCatalog): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, ProductCatalog $productCatalog): bool
    {
    }

    public function delete(User $user, ProductCatalog $productCatalog): bool
    {
    }

    public function restore(User $user, ProductCatalog $productCatalog): bool
    {
    }

    public function forceDelete(User $user, ProductCatalog $productCatalog): bool
    {
    }
}
