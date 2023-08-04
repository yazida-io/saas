<?php

namespace App\Http\Controllers;

use App\Http\Requests\Authentication\LoginRequest;
use App\Http\Requests\Authentication\RegisterRequest;
use App\Services\Contracts\AuthenticationContract;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(private readonly AuthenticationContract $service)
    {
    }

    public function authenticate(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (! Auth::attempt($credentials)) {
            return back()->withInput()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        return redirect()->route('app.index');
    }

    public function register(RegisterRequest $request)
    {
        $user = $this->service->register($request->validated());

        Auth::login($user);

        event(new Registered($user));

        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
