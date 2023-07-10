<?php

namespace App\Policies;

use App\Models\Team;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeamPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Team $team): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Team $team): bool
    {
    }

    public function delete(User $user, Team $team): bool
    {
    }

    public function restore(User $user, Team $team): bool
    {
    }

    public function forceDelete(User $user, Team $team): bool
    {
    }
}
