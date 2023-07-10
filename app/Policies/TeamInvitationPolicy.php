<?php

namespace App\Policies;

use App\Models\TeamInvitation;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeamInvitationPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, TeamInvitation $teamInvitation): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, TeamInvitation $teamInvitation): bool
    {
    }

    public function delete(User $user, TeamInvitation $teamInvitation): bool
    {
    }

    public function restore(User $user, TeamInvitation $teamInvitation): bool
    {
    }

    public function forceDelete(User $user, TeamInvitation $teamInvitation): bool
    {
    }
}
