<?php

namespace App\Services\Contracts;

use App\Models\Post;
use Illuminate\Contracts\Support\Arrayable;

interface PostContract extends ServiceContract
{
    public function index(array $filters = []): array|Arrayable;

    public function store(array $data): Post;

    public function show(Post $post): array|Arrayable;

    public function update(Post $post, array $data): Post;

    public function destroy(Post $post): bool;
}
