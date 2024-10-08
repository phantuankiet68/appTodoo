<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Component;
use Illuminate\Support\Facades\Auth;


class ComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $components = Component::where('user_id', Auth::id())->paginate(12);
        return view('component.index', compact('components'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'c_html' => 'nullable|string',
            'c_css' => 'nullable|string',
            'c_javascript' => 'nullable|string',
            'link' => 'nullable|string|max:255',
        ]);
    
        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->move(public_path('assets/images'), $filename);
            $relativePath = $filename;
        }
    
        Component::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $relativePath,
            'c_html' => $request->c_html,
            'c_css' => $request->c_css,
            'c_javascript' => $request->c_javascript,
            'link' => $request->link,
        ]);
    
        return redirect()->route('component.index')->with('success', 'Question created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $components = Component::findOrFail($id);
        return response()->json($components);
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
        $component = Component::findOrFail($id);
        $component->delete();
        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
