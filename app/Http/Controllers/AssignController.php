<?php

namespace App\Http\Controllers;
use App\Models\Issue;
use App\Models\User;
use App\Models\IssueUser;
use Illuminate\Http\Request;

class AssignController extends Controller
{
    public function show($id)
    {
         $issue = Issue::findOrFail($id);
         $users = User::all();
         return view('assign.show', compact('issue', 'users'));
    }
 
     public function assign(Request $request, $id)
     {
        $issue = Issue::findOrFail($id);
        IssueUser::create([
            'issue_id' => $request->id,
            'user_id' => $request->user_id,
        ]);

        // Chuyển hướng về trang chi tiết issue
        return redirect()->route('issue.show', $issue->id)->with('success', 'Comment added successfully!');
     }
}
