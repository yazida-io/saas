<?php

use App\Models\User;
use App\Services\Contracts\AuthenticationContract;
use function Pest\Laravel\delete;
use function Pest\Laravel\get;
use function Pest\Laravel\post;
use function Pest\Laravel\put;

beforeEach(function () {
    $service = app(AuthenticationContract::class);

    $user = User::first();

    if (is_null($user)) {
        $user = $service->register([
            'name' => fake()->name(),
            'email' => fake()->email(),
            'password' => $password = fake()->password(minLength: 8),
            'password_confirmation' => $password,
        ]);
    }

    $info = $service->freshTokenInfoOf($user);

    $this->token = $info['token'];
});

test('category::index', function () {
    $response = get(route('categories.index'), ['Authorization' => "Bearer $this->token"]);

    $response->assertOk();

    $response->assertJsonStructure(['data', 'links']);

    expect($this->token)->not->toBeNull();
});

test('category::store', function () {
    $response = post(
        route('categories.store'),
        ['name' => fake()->name(), 'code' => md5(time())],
        ['Authorization' => "Bearer $this->token", 'accept' => 'application/json']
    );

    $response->assertCreated();
});

test('category::update', function () {
    $response = post(
        route('categories.store'),
        ['name' => fake()->name(), 'code' => md5(time())],
        ['Authorization' => "Bearer $this->token", 'accept' => 'application/json']
    );

    $response->assertCreated();

    $id = $response->json('id');

    $response = put(
        route('categories.update', $id),
        ['name' => fake()->name(), 'code' => md5(time())],
        ['Authorization' => "Bearer $this->token", 'accept' => 'application/json']
    );

    $response->assertOk();
});

test('category::delete', function () {
    $response = post(
        route('categories.store'),
        ['name' => fake()->name(), 'code' => md5(time())],
        ['Authorization' => "Bearer $this->token", 'accept' => 'application/json']
    );

    $response->assertCreated();

    $id = $response->json('id');

    $response = delete(
        route('categories.destroy', $id),
        ['Authorization' => "Bearer $this->token", 'accept' => 'application/json']
    );

    $response->assertOk();
});
