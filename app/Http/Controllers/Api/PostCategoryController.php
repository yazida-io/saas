<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreCategoryRequest;
use App\Http\Requests\Post\UpdateCategoryRequest;
use App\Models\PostCategory;
use App\Services\Contracts\PostCategoryContract;

class PostCategoryController extends Controller
{
    public function __construct(private readonly PostCategoryContract $service)
    {
        $this->authorizeResource(PostCategory::class, 'postCategory');
    }

    public function index()
    {
        return $this->service->index();
    }

    public function store(StoreCategoryRequest $request)
    {
        return $this->service->store($request->validated());
    }

    public function show(PostCategory $postCategory)
    {
        return $this->service->show($postCategory);
    }

    public function update(UpdateCategoryRequest $request, PostCategory $postCategory)
    {
        return $this->service->update($postCategory, $request->validated());
    }

    public function destroy(PostCategory $postCategory)
    {
        $this->service->destroy($postCategory);

        return response()->json();
    }
}
