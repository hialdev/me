<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index($id, $type)
    {
        $comments = Comment::where('commentable_id', $id)
            ->where('commentable_type', $type)
            ->latest()->with('replies')
            ->get();

        return response()->json($comments);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc,spoof,dns',
            'body' => 'required|string',
            'commentable_id' => 'required|integer',
            'commentable_type' => 'required|string',
            'parent_id' => 'nullable|integer',
        ]);
    
        $comment = Comment::create($request->all());
        return response()->json($comment, 201);
    }

}
