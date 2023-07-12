<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\LoginRequest;
use App\Http\Requests\Authentication\RegisterRequest;
use App\Http\Requests\EmailVerificationRequest;
use App\Services\Contracts\AuthenticationContract;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Symfony\Component\HttpFoundation\Response;

class AuthenticationController extends Controller
{
    public function __construct(private readonly AuthenticationContract $service)
    {
    }

    /**
     * @return JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        $user = $this->service->register($request->validated());

        event(new Registered($user));

        return response()->json(
            ['message' => 'User registered successfully'],
            Response::HTTP_CREATED
        );
    }

    public function login(LoginRequest $request)
    {
        $data = $this->service->login($request->validated());

        return response()->json($data, Response::HTTP_OK);
    }

    public function logout(Request $request)
    {
        $this->service->logout(auth()->user(), $request->bearerToken());

        return response()->json(['message' => 'User logged out successfully'], Response::HTTP_OK);
    }

    public function me()
    {
        return response()->json(auth()->user(), Response::HTTP_OK);
    }

    public function verifyEmail(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return response()->json(['message' => 'Email verified successfully'], Response::HTTP_OK);
    }

    public function resendVerificationEmail(): JsonResponse
    {
        auth()->user()->sendEmailVerificationNotification();

        return response()->json(['message' => 'Email verification link sent successfully'], Response::HTTP_OK);
    }

    public function forgotPassword(Request $request): JsonResponse
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        return response()->json(['message' => __($status)], Response::HTTP_OK);
    }

    public function updatePassword(Request $request): JsonResponse
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            fn($user) => $user->update(['password' => $request->password])
        );

        return response()->json(['message' => __($status)], Response::HTTP_OK);
    }
}
