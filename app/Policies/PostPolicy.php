<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class PostPolicy extends Policy
{
    use HandlesAuthorization;

    public function viewAny(User $user): Response
    {
        // TODO: allow only for admins...
        return Response::allow();
    }

    public function view(User $user, Post $post): Response
    {
        return $this->allowIf($user->id === $post->user_id);
    }

    public function create(User $user): Response
    {
        // TODO: allow only for admins...
        return $this->allowIf(true);
    }

    public function update(User $user, Post $post): Response
    {
        return $this->allowIf($user->id === $post->user_id);
    }

    public function delete(User $user, Post $post): Response
    {
        return $this->allowIf($user->id === $post->user_id);
    }
}
