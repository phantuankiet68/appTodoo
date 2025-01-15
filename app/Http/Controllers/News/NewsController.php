<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::get();
        return view('admin.news.index', compact('news'));
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

        News::create($validatedData);

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
        $news = News::find($id);

        if (!$news) {
            return response()->json(['error' => 'News not found'], 404);
        }

        return response()->json([
            'id' => $news->id,
            'name' => $news->name,
            'description' => $news->description,
            'image_path' => asset($news->image_path)
        ]);
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


     /**
     * Show the index home for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_home()
    {
        return view('pages.news.index');
    }

}
