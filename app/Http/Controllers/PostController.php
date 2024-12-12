<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with(['user', 'images', 'comments', 'likes'])
        ->where('user_id', Auth::id())
        ->whereHas('images', function($query) {
            $query->select('id', 'post_id');
        })  
        ->withCount('comments')
        ->withCount('likes')
        ->orderBy('comments_count', 'asc')
        ->orderBy('id', 'asc')
        ->get();
        return view('post.index', compact('posts'));
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'location' => 'required|string|max:255',
                'description' => 'nullable|string',
                'images.*' => 'image|max:5120',
            ]);
        
            if ($validator->fails()) {
               return redirect()->back()->withErrors($validator)->withInput();
            }
            $post = Post::create([
                'user_id' => auth()->id(),
                'location' => $request->location,
                'description' => $request->description,
            ]);

            if ($request->hasFile('images')) {
                $images = $request->file('images');
                foreach ($images as $image) {
                    $originalName = $image->getClientOriginalName();
                    $extension = $image->getClientOriginalExtension();
                    $sanitizedFilename = str_replace(' ', '_', pathinfo($originalName, PATHINFO_FILENAME));
                    $filename = time() . '_' . $sanitizedFilename . '.' . $extension;
                    $image->move(public_path('assets/images'), $filename);
                    $relativePath = 'assets/images/' . $filename;
                    
                    PostImage::create([
                        'post_id' => $post->id,
                        'image_path' => $relativePath,
                    ]);
                }
            }

            return redirect()->back()->with('success', 'Workflow created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while saving the post.');
        }
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
