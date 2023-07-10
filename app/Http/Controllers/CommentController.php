<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\CommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Comment::class);

        return Comment::all();
    }

    public function store(CommentRequest $request)
    {
        $this->authorize('create', Comment::class);

        return Comment::create($request->validated());
    }

    public function show(Comment $comment)
    {
        $this->authorize('view', $comment);

        return $comment;
    }

    public function update(CommentRequest $request, Comment $comment)
    {
        $this->authorize('update', $comment);

        $comment->update($request->validated());

        return $comment;
    }

    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment);

        $comment->delete();

        return response()->json();
    }
}
