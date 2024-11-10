<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostComment;
use App\Models\Post;


class PostCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $posts = Post::findOrFail($id);
        PostComment::create([
            'post_id' => $posts->id,
            'user_id' => auth()->id(), 
            'comment' => $request->comment,
        ]);

        return redirect()->route('chat.index', $posts->id)->with('success', 'Comment added successfully!');
    }

    public function getComments($postId)
    {
        $comments = PostComment::where('post_id', $postId)->with('user')->orderBy('created_at', 'desc')->get();
        return response()->json($comments);
    }
}
