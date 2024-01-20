<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Uzivatel;



class CommentController extends Controller
{
     public function store(Request $request)
    {
        $data = $request->validate([
            'comment_body' => 'required|string',
            'email' => 'required|email|exists:uzivatels,email', // Check if the provided email exists in 'uzivatels' table
            'post_id' => 'integer|required|unique:comments,post_id', // Check if the provided post_id is unique in 'comments' table
        ]);

        // Assuming you have user and post IDs available
        $user = Uzivatel::where('email', $data['email'])->first();

        // Create a comment using only the provided data
        Comment::create([
            'email' => $data['email'],
            'post_id' => $data['post_id'],
            'comment_body' => $data['comment_body'],
        ]);

        return view('forum');
    }
}


