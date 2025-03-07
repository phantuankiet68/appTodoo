<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;


class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = Color::all();
        return view('color.index', compact('colors'));
    }

    public function create()
    {
        return view('color.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Color::create($request->all());

        return redirect()->route('colors.index')->with('success', 'Color created successfully.');
    }

    public function show(Color $color)
    {
        return view('color.show', compact('project'));
    }

    public function edit(Color $color)
    {
        return view('color.edit', compact('project'));
    }

    public function update(Request $request, Color $color)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $color->update($request->all());

        return redirect()->route('color.index')->with('success', 'Color updated successfully.');
    }

    public function destroy(Color $color)
    {
        $color->delete();

        return redirect()->route('color.index')->with('success', 'Color deleted successfully.');
    }
}
