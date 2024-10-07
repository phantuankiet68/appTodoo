<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
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
        $category = Category::where('key', 5)->get();
        $vocabulary = Vocabulary::with(['category'])->where('language_id', 3)->get();
        $structures = Structure::with(['category'])->where('language_id', 3)->get();
        $QuizItems = QuizItem::with(['category'])->where('language_id', 3)->get();
        $paragraph = Paragraph::with(['category'])->where('language_id', 3)->get();
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
        $category = Category::where('key', 5)->get();
        $vocabulary = Vocabulary::with(['category'])->where('language_id', 3)->paginate(10);
        $structures = Structure::with(['category'])->where('language_id', 3)->paginate(10);
        $QuizItems = QuizItem::with(['category'])->where('language_id', 3)->paginate(11);
        return view('japanese.add.index', compact('category','vocabulary','structures','QuizItems'));
    }

    public function submitQuiz(Request $request)
    {
        $userId = $request->input('user_id');
        $categoryId = $request->input('category_id');
        $languageId = $request->input('language_id');

        // Lấy mảng câu hỏi từ request
        $questions = $request->input('questions');

        // Kiểm tra nếu không có câu hỏi nào trong form
        if (!$questions || !is_array($questions)) {
            return redirect()->back()->with('error', 'Không có câu hỏi nào được gửi!');
        }

        // Đếm số lượng câu hỏi
        $totalQuestions = count($questions);
        $correctAnswers = 0;
        $wrongAnswers = 0;

        // Xử lý từng câu hỏi và so sánh đáp án
        foreach ($questions as $quizId => $userAnswer) {
            $quiz = QuizItem::find($quizId);

            if ($quiz) {
                // So sánh câu trả lời sau khi chuyển đổi thành chữ thường
                if (strtolower($userAnswer) === strtolower($quiz->answer_correct)) {
                    $correctAnswers++;
                } else {
                    $wrongAnswers++;
                }
            }
        }

        // Lưu kết quả vào bảng results
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
