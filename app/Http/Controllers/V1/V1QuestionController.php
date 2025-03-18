<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuestionCategory;
use App\Models\Question;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
class V1QuestionController extends Controller
{
    public function index(Request $request)
    {
        $question_category = QuestionCategory::all();
        $questions = Question::when($request->search, function ($query, $search) {
            return $query->where('question', 'like', '%' . $search . '%');
        })->get();
    
        if ($request->ajax()) {
            return response()->json($questions);
        }
    
        return view('pages.question.index', compact('question_category', 'questions'));
    }
    
    

    public function index_add()
    {
        $question_category = QuestionCategory::get();
        $questions = Question::get();
        return view('pages.question.questionAdd.index', compact('question_category','questions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_category_id' => 'required|exists:question_categories,id',
            'question' => 'required|string|max:1000',
            'answer' => 'required|string|max:5000',
        ]);

        Question::create([
            'user_id' => auth()->id(),
            'question_category_id' => $request->question_category_id,
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Question created successfully.'
        ]);
    }
    public function getByCategory($categoryId)
    {
        $questions = Question::where('question_category_id', $categoryId)->get();

        if ($questions->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'Không có dữ liệu.']);
        }

        return response()->json(['success' => true, 'questions' => $questions]);
    }



}
