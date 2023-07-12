<?php

namespace App\Services;

use App\Models\User;
use App\Services\Contracts\AuthenticationContract;
use Exception;
use Illuminate\Support\Facades\Hash;

class AuthenticationService implements AuthenticationContract
{
    public function register(array $data): User
    {
        $data['password'] = Hash::make($data['password']);

        return User::create($data);
    }

    /**
     * @throws Exception
     */
    public function login(array $credentials): array
    {
        $user = User::where('email', $credentials['email'])->first();

        if (is_null($user) || ! Hash::check($credentials['password'], $user->password)) {
            throw new Exception('Invalid credentials');
        }

        $token = $user->createToken('auth::token')->plainTextToken;

        return ['user' => $user, 'token' => $token];
    }

    public function logout(User $user, string $token): bool
    {
        return $user->tokens()->where('token', $token)->delete();
    }
}
