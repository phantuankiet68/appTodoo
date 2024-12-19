<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryLanguage;
use App\Models\Vocabulary;
use App\Models\Structure;
use App\Models\QuizItem;
use App\Models\Paragraph;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;
class JapaneseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = CategoryLanguage::get();
        $vocabulary = Vocabulary::with(['category'])->where('language_id', 3)->where('category_id', 1)->get();
        $structures = Structure::with(['category'])->where('language_id', 3)->where('category_id', 1)->get();
        $QuizItems = QuizItem::with(['category'])->where('language_id', 3)->where('category_id', 1)->get();
        $paragraph = Paragraph::with(['category'])->where('language_id', 3)->where('category_id', 1)->get();
        $result = Result::with(['category'])->where('language_id', 3)->where('user_id', Auth::id())->orderBy('created_at', 'desc')->paginate(1);
        return view('japanese.index',compact('category','vocabulary','structures','QuizItems','paragraph','result'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addJapanese()
    {
        $category = CategoryLanguage::get();
        $vocabulary = Vocabulary::with(['category'])->where('language_id', 3)->paginate(10);
        $structures = Structure::with(['category'])->where('language_id', 3)->paginate(10);
        $QuizItems = QuizItem::with(['category'])->where('language_id', 3)->paginate(11);
        $paragraph = Paragraph::with(['category'])->where('language_id', 3)->get();
        return view('japanese.add.index', compact('category','vocabulary','structures','QuizItems','paragraph'));
    }

    public function submitQuiz(Request $request)
    {
        $userId = $request->input('user_id');
        $categoryId = $request->input('category_id');
        $languageId = $request->input('language_id');

        $questions = $request->input('questions');

        if (!$questions || !is_array($questions)) {
            return redirect()->back()->with('error', 'Không có câu hỏi nào được gửi!');
        }

        $totalQuestions = count($questions);
        $correctAnswers = 0;
        $wrongAnswers = 0;

        foreach ($questions as $quizId => $userAnswer) {
            $quiz = QuizItem::find($quizId);

            if ($quiz) {
                if (strtolower($userAnswer) === strtolower($quiz->answer_correct)) {
                    $correctAnswers++;
                } else {
                    $wrongAnswers++;
                }
            }
        }

        Result::create([
            'user_id' => $userId,
            'category_id' => $categoryId,
            'correct_answers' => $correctAnswers,
            'wrong_answers' => $wrongAnswers,
            'language_id' => $languageId
        ]);

        return redirect()->back()->with('success', 'Kết quả đã được lưu!');
    }

    

    
    


}
