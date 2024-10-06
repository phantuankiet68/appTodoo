<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizItem;

class QuizItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
            'language_id' => 'required',
            'category_id' => 'required',
            'question' => 'required',
            'answer_a' => 'required',
            'answer_b' => 'required',
            'answer_c' => 'required',
            'answer_d' => 'required',
            'answer_correct' => 'required',
        ]);

        QuizItem::create($request->all());

        return redirect()->back()->with('success', 'Quiz created updated successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $QuizItems = QuizItem::findOrFail($id);
        return response()->json($QuizItems);
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
        $request->validate([
            'language_id' => 'required',
            'category_id' => 'required',
            'question' => 'required',
            'answer_a' => 'required',
            'answer_b' => 'required',
            'answer_c' => 'required',
            'answer_d' => 'required',
            'answer_correct' => 'required',
        ]);
        $issue = QuizItem::findOrFail($id);
        $issue->update($request->all());

        return redirect()->back()->with('success', 'Quiz item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $QuizItems = QuizItem::findOrFail($id);
        $QuizItems->delete();
        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
