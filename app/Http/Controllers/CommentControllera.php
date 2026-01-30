<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'text' => 'required|max:351',
        ]);

        $post->comments()->create([
            'nickname' => auth()->user()->nickname, // Или другой способ получения никнейма пользователя
            'text' => $request->text,
        ]);

        return redirect()->route('posts.index');
    }
}
