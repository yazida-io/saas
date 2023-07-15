<?php

namespace App\Services;

use App\Models\Post;
use App\Services\Contracts\PostContract;
use Illuminate\Contracts\Support\Arrayable;

class PostService implements PostContract
{
    public function index(array $filters = []): array|Arrayable
    {
        return Post::query()->paginate();
    }

    public function store(array $data): Post
    {
        return Post::create($data);
    }

    public function show(Post $post): array|Arrayable
    {
        return $post->toArray();
    }

    public function update(Post $post, array $data): Post
    {
        $post->update($data);

        return $post;
    }

    public function destroy(Post $post): bool
    {
        return $post->delete();
    }
}
