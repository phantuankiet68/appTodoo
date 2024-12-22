<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vocabulary;
use App\Models\CategoryLanguage;
class VocabularyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('japanese.add.index');
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
            'language_id' => 'required|integer',
            'category_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'meaning_of_word' => 'required|string|max:255',
            'romaji' => 'required|string|max:255',
        ]);

        Vocabulary::create($request->all());

        return redirect()->back()->with('success', 'Vocabulary added successfully!');
    }

    
    /**
    * Display the specified resource.
    * @author Phan Tuấn Kiệt
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $path_id = $id;
        $category = CategoryLanguage::get();
        $vocabularies = Vocabulary::with(['category'])->where('language_id', 3)->where('category_id', $id)->get();
        return view('showVocabulary.index', compact('path_id','category','vocabularies'));
    }

    // Function to update vocabulary in the database
    public function update(Request $request, Vocabulary $vocabulary)
    {
        $request->validate([
            'language_id' => 'required|integer',
            'category_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'meaning_of_word' => 'required|string|max:255',
            'romaji' => 'required|string|max:255',
        ]);

        $vocabulary->update($request->all());

        return redirect()->back()->with('success', 'Vocabulary updated successfully!');
    }

    // Function to delete a specific vocabulary
    public function destroy($id)
    {
        $vocabulary = Vocabulary::findOrFail($id);
        $vocabulary->delete();
        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
