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

test('post::index', function () {
    $response = get(route('posts.index'), ['Authorization' => "Bearer $this->token"]);

    $response->assertOk();

    $response->assertJsonStructure(['data', 'links']);

    expect($this->token)->not->toBeNull();
});

test('post::store', function () {
    $response = post(
        route('posts.store'),
        ['title' => fake()->title(), 'content' => fake()->text()],
        ['Authorization' => "Bearer $this->token", 'accept' => 'application/json']
    );

    $response->assertCreated();
});

test('post::update', function () {
    $response = post(
        route('posts.store'),
        ['title' => fake()->title(), 'content' => fake()->text()],
        ['Authorization' => "Bearer $this->token", 'accept' => 'application/json']
    );

    $response->assertCreated();

    $id = $response->json('id');

    $response = put(
        route('posts.update', $id),
        ['title' => fake()->title(), 'content' => fake()->text()],
        ['Authorization' => "Bearer $this->token", 'accept' => 'application/json']
    );

    $response->assertOk();
});

test('post::delete', function () {
    $response = post(
        route('posts.store'),
        ['title' => fake()->title(), 'content' => fake()->text()],
        ['Authorization' => "Bearer $this->token", 'accept' => 'application/json']
    );

    $response->assertCreated();

    $id = $response->json('id');

    $response = delete(
        route('posts.destroy', $id),
        ['Authorization' => "Bearer $this->token", 'accept' => 'application/json']
    );

    $response->assertOk();
});
