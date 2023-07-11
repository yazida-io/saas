<?php

namespace App\Services\Contracts;

use App\Models\User;

interface AuthenticationContract extends ServiceContract
{
    public function register(array $data): User;

    public function login(array $credentials): array;

    public function logout(User $user, string $token): bool;
}
