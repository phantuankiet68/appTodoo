<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Issue;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $id)
    {
        $issue = Issue::findOrFail($id);

        Comment::create([
            'issue_id' => $issue->id,
            'user_id' => auth()->id(),
            'comment' => $request->comment,
        ]);

        return redirect()->route('issue.show', $issue->id)->with('success', 'Comment added successfully!');
    }
}
