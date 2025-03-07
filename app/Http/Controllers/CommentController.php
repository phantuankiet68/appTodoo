<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IssueProject;
use App\Models\Comment;


class CommentController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'issue_project_id' => 'required|exists:issue_projects,id',
            'user_id' => 'required|exists:users,id',
            'status' => 'required|integer',
            'assignee' => 'required|exists:users,id',
            'description' => 'nullable|string',
            'url' => 'nullable|url',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image') && $request->file('image')->isValid()) { // Kiểm tra nếu có tệp và tệp hợp lệ
            $image = $request->file('image');
            $filename = uniqid() . '_' . hash('sha256', $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
            $imagePath = 'assets/images/' . $filename;
            $image->move(public_path('assets/images'), $filename);
        }

        Comment::create([
            'issue_project_id' => $request->issue_project_id,
            'user_id' => $request->user_id,
            'description' => $request->description,
            'url' => $request->url,
            'image' => $imagePath,
            'assignee_id' => $request->assignee,
            'status' => $request->status,
        ]);

        IssueProject::where('id', $request->issue_project_id)->update([
            'assignee_id' => $request->assignee,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Comment added and issue updated successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
