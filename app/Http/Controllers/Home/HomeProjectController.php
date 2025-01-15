<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectHome;

class HomeProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = ProjectHome::get();
        return view('admin.project.index', compact('projects'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
            'image_path' => 'nullable|image',
            'description' => 'nullable|string',
            'language' => 'required|string',
            'status' => 'required|boolean',
            'stt' => 'required|integer',
        ]);

        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            
            $originalName = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();
            
            $sanitizedFilename = str_replace(' ', '_', pathinfo($originalName, PATHINFO_FILENAME));
            $filename = time() . '_' . $sanitizedFilename . '.' . $extension;
            
            $image->move(public_path('assets/images'), $filename);

            $validatedData['image_path'] = 'assets/images/' . $filename;
        }

        ProjectHome::create($validatedData);

        return redirect()->back()->with('success', __('messages.News saved successfully!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = ProjectHome::find($id);

        if (!$news) {
            return response()->json(['error' => 'ProjectHome not found'], 404);
        }

        return response()->json([
            'id' => $news->id,
            'name' => $news->name,
            'description' => $news->description,
            'image_path' => asset($news->image_path)
        ]);
    }

}
