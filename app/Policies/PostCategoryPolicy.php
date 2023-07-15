<?php

namespace App\Policies;

use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class PostCategoryPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): Response
    {
        return Response::allow();
    }

    public function view(User $user, PostCategory $postCategory): bool
    {
        return $user->id === $postCategory->user_id;
    }

    public function create(User $user): Response
    {
        return Response::allow();
    }

    public function update(User $user, PostCategory $postCategory): bool
    {
        return $user->id === $postCategory->user_id;
    }

    public function delete(User $user, PostCategory $postCategory): bool
    {
        return $user->id === $postCategory->user_id;
    }

    public function restore(User $user, PostCategory $postCategory): bool
    {
        return $user->id === $postCategory->user_id;
    }

    public function forceDelete(User $user, PostCategory $postCategory): bool
    {
        return $user->id === $postCategory->user_id;
    }
}
