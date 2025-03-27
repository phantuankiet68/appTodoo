<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kanji;
use App\Models\LessonKanji;
use App\Models\TestKanji;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Database\QueryException;

class V1KanjiController extends Controller
{
    public function index(Request $request)
    {
        $locale = session('locale', 'en');

        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];

        $languageId = $languageMap[$locale] ?? 2;
        
        $search = $request->input('search');

        // Truy vấn toàn bộ danh sách Kanji (giữ nguyên)
        $kanji = Kanji::where('language', $languageId)
            ->orderBy('id', 'desc')
            ->get();

        // Tạo biến $kanjis rỗng nếu chưa tìm kiếm
        $kanjis = collect();

        if (!empty($search)) {
            $kanjis = Kanji::where('language', $languageId)
                ->where(function ($q) use ($search) {
                    $q->where('kanji', 'LIKE', "%{$search}%")
                    ->orWhere('meaning_han', 'LIKE', "%{$search}%")
                    ->orWhere('onyomi', 'LIKE', "%{$search}%")
                    ->orWhere('example_sentence', 'LIKE', "%{$search}%");
                })
                ->orderBy('id', 'desc')
                ->get();
        }

        $lessons = LessonKanji::all();

        return view('pages.japanese.kanji.index', compact('kanji', 'kanjis', 'lessons', 'search'));
    }

    public function showLessonKanji($lesson_id)
    {
        $locale = session('locale', 'en');

        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];

        $languageId = $languageMap[$locale] ?? 2;

        $kanjis = Kanji::where('language', $languageId)
                    ->where('lesson_kanjis_id', $lesson_id)
                    ->orderBy('id', 'asc')
                    ->get();

        $lesson = LessonKanji::findOrFail($lesson_id);

        return view('pages.japanese.kanji.showKanji.index', compact('kanjis', 'lesson'));
    }


    public function index_add(Request $request)
    {
        $search = $request->input('search');
        $lessons = LessonKanji::all();
    
        if ($search) {
            $kanjis = Kanji::where('kanji', 'LIKE', "%{$search}%")
                            ->orWhere('meaning_han', 'LIKE', "%{$search}%")
                            ->orWhere('onyomi', 'LIKE', "%{$search}%")
                            ->orWhere('compounds', 'LIKE', "%{$search}%")
                            ->orWhere('related_words', 'LIKE', "%{$search}%")
                            ->with('lesson')
                            ->orderBy('id', 'desc')
                            ->get();
        } else {
            $kanjis = Kanji::with('lesson')->orderBy('id', 'desc')->get();
        }
    
        return view('pages.japanese.kanji.add.index', compact('lessons', 'kanjis', 'search'));
    }

    public function index_test(Request $request)
    {
        $search = $request->input('search');
        $lessons = LessonKanji::all();
    
        if ($search) {
            $test_kanjis = TestKanji::Where('question', 'LIKE', "%{$search}%")
                            ->orWhere('correct_answer', 'LIKE', "%{$search}%")
                            ->orWhere('explanation', 'LIKE', "%{$search}%")
                            ->orWhere('difficulty', 'LIKE', "%{$search}%")
                            ->orderBy('id', 'desc')
                            ->get();
        } else {
            $test_kanjis = TestKanji::with('lesson')->orderBy('id', 'desc')->get();
        }

        return view('pages.japanese.kanji.test.index',compact('test_kanjis','lessons','search'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'lesson_kanjis_id' => 'required',
            'language' => 'required|integer',
            'kanji' => 'required|string',
            'meaning_han' => 'required|string|max:255',
            'onyomi' => 'nullable|string|max:255',
            'compounds' => 'nullable|string|max:255',
            'related_words' => 'nullable|string|max:255',
            'example_sentence' => 'nullable|string|max:255',
            'example_meaning' => 'nullable|string|max:255',
        ]);

        try {
            Kanji::create([
                'lesson_kanjis_id' => $request->lesson_kanjis_id,
                'language' => $request->language,
                'kanji' => $request->kanji,
                'meaning_han' => $request->meaning_han,
                'onyomi' => $request->onyomi,
                'compounds' => $request->compounds,
                'related_words' => $request->related_words,
                'example_sentence' => $request->example_sentence,
                'example_meaning' => $request->example_meaning,
                'user_id' => Auth::id(),
            ]);
        
            return redirect()->back()->with('success', __('messages.Vocabulary added successfully!'));
        
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Database Error: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'General Error: ' . $e->getMessage());
        }
    }
   
    public function storeLesson(Request $request)
    {

        $request->validate([
            'lesson' => 'required|string|max:50',
            'title' => 'required|string|max:255',
            'level' => 'required|string|max:50',
        ]);

        try {
            LessonKanji::create([
                'lesson' => $request->lesson,
                'title' => $request->title,
                'level' => $request->level,
            ]);

            return redirect()->back()->with('success', __('messages.Lesson added successfully!'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.Failed to add lesson. Please try again!'));
        }
    }

    public function storeTest(Request $request)
    {
        $request->validate([
            'lesson_kanjis_id' => 'required|exists:lessons,id',
            'language' => 'required|in:1,2,3',
            'question' => 'required|string|max:255',
            'option_a' => 'required|string|max:255',
            'option_b' => 'nullable|string|max:255',
            'option_c' => 'nullable|string|max:255',
            'option_d' => 'nullable|string|max:255',
            'correct_answer' => 'required|string|max:255',
            'explanation' => 'nullable|string|max:500',
            'difficulty' => 'required|integer',
            'level' => 'required|in:1,2',
        ]);

        TestKanji::create([
            'lesson_kanjis_id' => $request->lesson_kanjis_id,
            'language' => $request->language,
            'question' => $request->question,
            'option_a' => $request->option_a,
            'option_b' => $request->option_b,
            'option_c' => $request->option_c,
            'option_d' => $request->option_d,
            'correct_answer' => $request->correct_answer,
            'explanation' => $request->explanation,
            'difficulty' => 1,
            'level' => $request->level,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('kanji.index_test')->with('success', 'Kanji question added successfully!');
    }

    public function show($id)
    {
        $kanji = Kanji::find($id);
    
        if (!$kanji) {
            return response()->json(['error' => 'Không tìm thấy Kanji'], 404);
        }
    
        return response()->json($kanji);
    }

    public function showTest($id)
    {
        $test_kanji = TestKanji::find($id);
    
        if (!$test_kanji) {
            return response()->json(['error' => 'Không tìm thấy Kanji'], 404);
        }
    
        return response()->json($test_kanji);
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
        $kanji = Kanji::find($id);

        if (!$kanji) {
            return redirect()->back()->with('error', 'Không tìm thấy Kanji.');
        }

        $kanji->update($request->all());

        return redirect()->route('kanji.index_add')->with('success', 'Cập nhật Kanji thành công.');
    }

    public function updateTest(Request $request, $id)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'option_a' => 'required|string|max:255',
            'option_b' => 'nullable|string|max:255',
            'option_c' => 'nullable|string|max:255',
            'option_d' => 'nullable|string|max:255',
            'correct_answer' => 'required|string|max:255',
            'explanation' => 'nullable|string|max:500',
            'level' => 'required|in:1,2',
        ]);

        $testKanji = TestKanji::findOrFail($id);

        $testKanji->update([
            'question' => $request->question,
            'option_a' => $request->option_a,
            'option_b' => $request->option_b,
            'option_c' => $request->option_c,
            'option_d' => $request->option_d,
            'correct_answer' => $request->correct_answer,
            'explanation' => $request->explanation,
            'level' => $request->level,
        ]);

        return redirect()->route('kanji.index_test')->with('success', 'Cập nhật câu hỏi Kanji thành công!');
    }

    public function destroy($id)
    {
        $kanji = Kanji::find($id);

        if (!$kanji) {
            return response()->json(['error' => 'Không tìm thấy Kanji'], 404);
        }

        $kanji->delete();

        return response()->json(['message' => 'Đã xóa Kanji thành công'], 200);
    }

    public function destroyTest($id)
    {
        $kanji = TestKanji::find($id);

        if (!$kanji) {
            return response()->json(['error' => 'Không tìm thấy Kanji'], 404);
        }

        $kanji->delete();

        return response()->json(['message' => 'Đã xóa Kanji thành công'], 200);
    }
}
