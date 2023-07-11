<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\LoginRequest;
use App\Http\Requests\Authentication\RegisterRequest;
use App\Notifications\Welcome;
use App\Services\Contracts\AuthenticationContract;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
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

        $user->notify(new Welcome());

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
}
