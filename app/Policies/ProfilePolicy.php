<?php

namespace App\Policies;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfilePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Profile $profile): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Profile $profile): bool
    {
    }

    public function delete(User $user, Profile $profile): bool
    {
    }

    public function restore(User $user, Profile $profile): bool
    {
    }

    public function forceDelete(User $user, Profile $profile): bool
    {
    }
}
