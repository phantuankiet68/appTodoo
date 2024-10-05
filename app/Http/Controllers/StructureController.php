<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Structure;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $structures = Structure::all();
        return response()->json($structures);
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
            'language_id' => 'required|exists:languages,id',
            'category_id' => 'required|exists:categories,id',
            'structure' => 'required|string|max:255',
            'meaning_of_structure' => 'required|string|max:255',
            'example' => 'required|string|max:255',
            'meaning_of_example' => 'required|string|max:255',
        ]);

        $structure = Structure::create($request->all());
        return redirect()->back()->with('success', 'Vocabulary updated successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $structure = Structure::findOrFail($id);
        return response()->json($structure);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Structure $structure)
    {
        $request->validate([
            'language_id' => 'required|exists:languages,id',
            'category_id' => 'required|exists:categories,id',
            'structure' => 'required|string|max:255',
            'meaning_of_structure' => 'required|string|max:255',
            'example' => 'required|string|max:255',
            'meaning_of_example' => 'required|string|max:255',
        ]);

        $structure->update($request->all());

        return redirect()->back()->with('success', 'Vocabulary updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $structure = Structure::findOrFail($id);
        $structure->delete();
        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
