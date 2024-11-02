<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostImage;
use App\Models\PostComment;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $posts = Post::with(['user', 'images', 'comments', 'likes'])
        ->whereHas('images', function($query) {
            $query->select('id', 'post_id');
        })  
        ->withCount('comments')
        ->withCount('likes')
        ->orderBy('comments_count', 'asc')
        ->orderBy('id', 'asc')
        ->get();

        return view('chat.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexInfo()
    {
        $profiles = Profile::where('user_id', Auth::id())->get();
        return view('chat.info.index', compact('profiles'));
    }

    public function updateProfile(Request $request, $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'current_start' => 'nullable|date',
            'status' => 'nullable|integer',
            'email' => 'required|string|max:255',
            'phone' => 'required',
            'date_of_birth' => 'nullable|date',
            'link_facebook' => 'required|string|max:255',
            'link_instagram' => 'required|string|max:255',
            'link_linkin' => 'required|string|max:255',
            'link_link' => 'required|string|max:255',
            'address' =>'required|string|max:255',
            'description' => 'required|string',
            'roles' => 'required|string|max:255'
        ]);

        $profiles = Profile::findOrFail($id);
        $profiles->update($validatedData);
        return redirect()->route('info.index')->with('success', 'Profile updated successfully');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
