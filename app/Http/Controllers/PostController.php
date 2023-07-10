<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Post::class);

        return Post::all();
    }

    public function store(PostRequest $request)
    {
        $this->authorize('create', Post::class);

        return Post::create($request->validated());
    }

    public function show(Post $post)
    {
        $this->authorize('view', $post);

        return $post;
    }

    public function update(PostRequest $request, Post $post)
    {
        $this->authorize('update', $post);

        $post->update($request->validated());

        return $post;
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return response()->json();
    }
}
