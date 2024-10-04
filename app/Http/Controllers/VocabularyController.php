<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class VocabularyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::where('key', 5);

        return view('japanese.add.index', compact('category'));
    }

    // Function to show form for creating vocabulary
    public function create()
    {
        return view('vocabularies.create');
    }

    // Function to store vocabulary in the database
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'meaning_of_word' => 'required|string|max:255',
            'romaji' => 'required|string|max:255',
        ]);

        Vocabulary::create($request->all());

        return redirect()->route('vocabularies.index')->with('success', 'Vocabulary added successfully!');
    }

    // Function to edit a specific vocabulary
    public function edit(Vocabulary $vocabulary)
    {
        return view('vocabularies.edit', compact('vocabulary'));
    }

    // Function to update vocabulary in the database
    public function update(Request $request, Vocabulary $vocabulary)
    {
        $request->validate([
            'category_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'meaning_of_word' => 'required|string|max:255',
            'romaji' => 'required|string|max:255',
        ]);

        $vocabulary->update($request->all());

        return redirect()->route('vocabularies.index')->with('success', 'Vocabulary updated successfully!');
    }

    // Function to delete a specific vocabulary
    public function destroy(Vocabulary $vocabulary)
    {
        $vocabulary->delete();

        return redirect()->route('vocabularies.index')->with('success', 'Vocabulary deleted successfully!');
    }
}
