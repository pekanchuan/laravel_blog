<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request, Post $post)
    {
        $request->validate([
            'body' => 'required'
        ]);

        $post->comments()->create([
            'user_id' => $request->user()->id,
            'body' => $request->input('body')
        ]);

        return back();
    }

    public function show(Comment $comment)
    {
    }

    public function update(Request $request, Comment $comment)
    {
    }

    public function destroy(Comment $comment)
    {
    }
}
