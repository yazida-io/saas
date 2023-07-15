<?php

namespace App\Services\Contracts;

use App\Models\PostCategory;
use Illuminate\Contracts\Support\Arrayable;

interface PostCategoryContract extends ServiceContract
{
    public function index(array $filters = []): array|Arrayable;

    public function store(array $data): PostCategory;

    public function show(PostCategory $postCategory): array|Arrayable;

    public function update(PostCategory $postCategory, array $data): PostCategory;

    public function destroy(PostCategory $postCategory): bool;
}
