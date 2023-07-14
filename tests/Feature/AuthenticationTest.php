<?php

use App\Services\Contracts\AuthenticationContract;
use Symfony\Component\HttpFoundation\Response;

test('fail on validation', function () {
    $response = $this->postJson(route('auth.register'));
    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['name', 'email', 'password']);

    $response = $this->postJson(
        route('auth.register'),
        ['name' => 'a', 'email' => 'a', 'password' => 'a']
    );
    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['name', 'email', 'password']);
});

test('register user', function () {
    $response = $this->postJson(
        route('auth.register'),
        [
            'name' => fake()->name(),
            'email' => fake()->email(),
            'password' => 'password',
            'password_confirmation' => 'password',
        ]
    );

    $response->assertStatus(Response::HTTP_CREATED);
})->only();

test('fail login validation', function () {
    $response = $this->postJson(route('auth.login'));
    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['email', 'password']);

    $response = $this->postJson(
        route('auth.login'),
        ['email' => 'a', 'password' => 'a']
    );
    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['email', 'password']);
});

test('login with valid credentials', function () {
    $email = fake()->email();
    $password = fake()->password(minLength: 8);

    $response = $this->postJson(
        route('auth.register'),
        ['name' => fake()->name(), 'email' => $email, 'password' => $password, 'password_confirmation' => $password]
    );

    $response->assertStatus(Response::HTTP_CREATED);

    $response = $this->postJson(route('auth.login'), ['email' => $email, 'password' => $password]);
    $response->assertStatus(Response::HTTP_OK);
    $response->assertJsonStructure(['user', 'token']);
});

test('fail logout', function () {
    $response = $this->postJson(
        route('auth.logout'),
        headers: ['Authorization' => 'Bearer invalid-token']
    );
    $response->assertStatus(Response::HTTP_UNAUTHORIZED);
});

test('logout successfully', function () {
    $email = fake()->email();
    $password = fake()->password(minLength: 8);

    $response = $this->postJson(
        route('auth.register'),
        [
            'name' => fake()->name(),
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $password,
        ]
    );

    $response = $this->postJson(route('auth.login'), ['email' => $email, 'password' => $password]);

    $response = $this->postJson(
        route('auth.logout'),
        headers: ['Authorization' => "Bearer {$response->json('token')}"]
    );
    $response->assertStatus(Response::HTTP_OK);
});

test('current user', function () {
    $email = fake()->email();
    $password = fake()->password(minLength: 8);

    $response = $this->postJson(
        route('auth.register'),
        [
            'name' => fake()->name(),
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $password,
        ]
    );

    $response = $this->postJson(route('auth.login'), ['email' => $email, 'password' => $password]);

    $response = $this->postJson(
        route('auth.user'),
        headers: ['Authorization' => "Bearer {$response->json('token')}"]
    );
    $response->assertStatus(Response::HTTP_OK);
    $response->assertJsonStructure(['name', 'email']);
});

test('verify user email', function () {
    $password = fake()->password(minLength: 8);
    $user = app(AuthenticationContract::class)->register([
        'name' => fake()->name(),
        'email' => fake()->email(),
        'password' => $password,
    ]);

    $response = $this->postJson(
        route('auth.login'),
        ['email' => $user->email, 'password' => $password]
    );

    $response = $this->postJson(
        route('verification.send'),
        headers: ['Authorization' => "Bearer {$response->json('token')}"]
    );

    $response->assertStatus(Response::HTTP_OK);
    $response->assertJsonStructure(['message']);
});

test('request change password', function () {
    $user = app(AuthenticationContract::class)->register([
        'name' => fake()->name(),
        'email' => fake()->email(),
        'password' => $password = fake()->password(minLength: 8),
        'password_confirmation' => $password,
    ]);

    $response = $this->postJson(route('password.email'), ['email' => $user->email]);
    $response->assertStatus(Response::HTTP_OK);
    $response->assertJsonStructure(['message']);
});

test('change password', function () {
    $user = fake()->email();
    $token = 'token';
    $response = $this->postJson(route('password.update'), [
        'token' => $token,
        'email' => $user,
        'password' => 'new-password',
        'password_confirmation' => 'new-password',
    ]);

    $response->assertStatus(Response::HTTP_OK);
    $response->assertJsonStructure(['message']);
})->skip('Find a way to mock the password broker');
