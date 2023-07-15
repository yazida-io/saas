<?php

namespace App\Services;

use App\Models\PostCategory;
use App\Services\Contracts\PostCategoryContract;
use Illuminate\Contracts\Support\Arrayable;

class PostCategoryService implements PostCategoryContract
{
    public function index(array $filters = []): array|Arrayable
    {
        return PostCategory::query()->paginate();
    }

    public function store(array $data): PostCategory
    {
        return PostCategory::create($data);
    }

    public function show(PostCategory $postCategory): array|Arrayable
    {
        return $postCategory->toArray();
    }

    public function update(PostCategory $postCategory, array $data): PostCategory
    {
        $postCategory->update($data);

        return $postCategory;
    }

    public function destroy(PostCategory $postCategory): bool
    {
        return $postCategory->delete();
    }
}
