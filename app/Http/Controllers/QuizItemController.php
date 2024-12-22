<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizItem;
use App\Models\CategoryLanguage;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;
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
        $path_id = $id;
        $path_id_x = $id + 1;
        $category = CategoryLanguage::get();
        $QuizItems = QuizItem::with(['category'])->where('language_id', 3)->where('category_id', $id)->get();
        $result = Result::with(['category'])->where('language_id', 3)->where('user_id', Auth::id())->orderBy('created_at', 'desc')->paginate(1);
        return view('showQuizItem.index', compact('path_id','path_id_x','category','QuizItems','result'));
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
