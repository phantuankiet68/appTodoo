<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Vocabulary;
use App\Models\Passage;
use App\Models\Structure;
use App\Models\QuizItem;
use App\Models\QuizCategory;

use Illuminate\Support\Facades\Auth;
use Exception;

class V1EnglishController extends Controller
{
    public function index()
    {
        return view('pages.english.index');
    }

    public function index_add_vocabulary()
    {
        $locale = session('locale', 'en');
        
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
    
        $languageId = $languageMap[$locale] ?? 2;
    
        $lessons = Lesson::where('language', $languageId)
            ->orderBy('id', 'asc')
            ->get();

        $duplicatedNames = Vocabulary::select('name')
            ->groupBy('name')
            ->havingRaw('COUNT(name) > 1')
            ->pluck('name');
        
        $vocabularies = Vocabulary::whereIn('name', $duplicatedNames)
            ->where('language', $languageId)
            ->get();

        return view('pages.english.vocabulary.index', compact('lessons','vocabularies'));
    }

    public function index_add_passage()
    {
        $locale = session('locale', 'en');
        
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
    
        $languageId = $languageMap[$locale] ?? 2;

        $lessons = Lesson::where('language', $languageId)
            ->orderBy('id', 'asc')
            ->get();

        $passages = Passage::whereHas('lesson', function ($query) {
                $query->where('language', 2);
            })
            ->orderBy('id', 'asc')
            ->with('user', 'lesson')
            ->get();
            

        return view('pages.english.passage.index', compact('passages','lessons'));
    }

    public function index_add_structure()
    {       
        $locale = session('locale', 'en');
        
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
    
        $languageId = $languageMap[$locale] ?? 2;

        $lessons = Lesson::where('language', $languageId)
            ->orderBy('id', 'asc')
            ->get();

        $structures = Structure::whereHas('lesson', function ($query) {
            $query->where('language', 2);
        })
        ->orderBy('id', 'asc')
        ->with('user', 'lesson')
        ->get();
        return view('pages.english.structure.index',compact('structures','lessons'));
    }

    public function index_quiz_item()
    {       
        $locale = session('locale', 'en');
        
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
    
        $languageId = $languageMap[$locale] ?? 2;

        $lessons = Lesson::where('language', $languageId)
            ->orderBy('id', 'asc')
            ->get();

        $categories = QuizCategory::all();

        $quizItems = QuizItem::where('quiz_category_id', 1)
            ->whereHas('lesson', function ($query) {
                $query->where('language', 2);
            })
            ->orderBy('id', 'asc')
            ->with('user', 'lesson')
            ->get();

        return view('pages.english.quizItem.index',compact('quizItems','categories','lessons'));
    }

    public function index_quiz_structure()
    {       
        $locale = session('locale', 'en');
        
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
    
        $languageId = $languageMap[$locale] ?? 2;

        $lessons = Lesson::where('language', $languageId)
            ->orderBy('id', 'asc')
            ->get();

        $categories = QuizCategory::all();

        $quizItems = QuizItem::where('quiz_category_id', 2)
            ->whereHas('lesson', function ($query) {
                $query->where('language', 2);
            })
            ->orderBy('id', 'asc')
            ->with('user', 'lesson')
            ->get();
        
        return view('pages.english.quizStructure.index',compact('quizItems','categories','lessons'));
    }
    

   
    public function store(Request $request)
    {
        //
    }

    public function storeLesson(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'language' => 'required',
        ]);

        try {
            Lesson::create([
                'name' => $request->name,
                'title' => $request->title,
                'language' => $request->language,
            ]);

            return redirect()->back()->with('success', __('messages.Lesson added successfully!'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('messages.Failed to add lesson. Please try again!'));
        }
    }

    public function storeVocabulary(Request $request)
    {
        $request->validate([
            'lesson_id'     => 'required',
            'language'      => 'required',
            'name'          => 'required|string|max:255',
            'meaning'       => 'required|string|max:255',
            'example'       => 'nullable|string',
            'translation'   => 'nullable|string',
            'pronunciation' => 'nullable|string|max:255',
            'level'         => 'required|string|max:255',
            'status'        => 'boolean',
        ]);

        try {
            Vocabulary::create([
                'user_id'       => Auth::id(),
                'lesson_id'     => $request->lesson_id,
                'language'      => $request->language,
                'name'          => $request->name,
                'meaning'       => $request->meaning,
                'example'       => $request->example,
                'translation'   => $request->translation,
                'pronunciation' => $request->pronunciation,
                'level'         => $request->level,
                'status'        => $request->status ?? 1,
            ]);

            return redirect()->back()->with('success', __('messages.Vocabulary added successfully!'));
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to add vocabulary!',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    public function storePassage(Request $request)
    {

        $request->validate([
            'lesson_id' => 'required|exists:lessons,id',
            'description' => 'required|string',
        ]);

        Passage::create([
            'user_id'       => Auth::id(),
            'lesson_id' => $request->lesson_id,
            'language' => $request->language,
            'description' => $request->description,
        ]);

        return response()->json(['success' => true]);

    }
    public function storeStructure(Request $request)
    {
        $request->validate([
            'lesson_id' => 'required|exists:lessons,id',
            'name' => 'required|string|max:255',
            'structure' => 'required|string',
            'example' => 'nullable|string',
            'translation' => 'nullable|string',
            'explanation' => 'nullable|string',
            'language' => 'required|string|max:255',
            'level' => 'nullable|integer',
            'status' => 'nullable|integer|in:1,2',
        ]);

        Structure::create([
            'lesson_id' => $request->lesson_id,
            'user_id' => Auth::id(),
            'name' => $request->name,
            'structure' => $request->structure,
            'example' => $request->example,
            'translation' => $request->translation,
            'explanation' => $request->explanation,
            'language' => $request->language,
            'level' => $request->level,
            'status' => $request->status ?? 1,
        ]);

        return redirect()->back()->with('success', 'Structure added successfully!');
    }

    public function storeQuizItem(Request $request)
    {
        $request->validate([
            'lesson_id' => 'required|exists:lessons,id',
            'quiz_category_id'=> 'required',
            'question' => 'required|string|max:255',
            'option_a' => 'required|string|max:255',
            'option_b' => 'required|string|max:255',
            'option_c' => 'required|string|max:255',
            'option_d' => 'required|string|max:255',
            'correct_answer' => 'required|string|in:A,B,C,D',
            'explanation' => 'required|string',
            'level' => 'required|integer|in:1,2',
            'status' => 'required|boolean',
        ]);

        QuizItem::create([
            'lesson_id' => $request->lesson_id,
            'quiz_category_id' => $request->quiz_category_id,
            'question' => $request->question,
            'option_a' => $request->option_a,
            'option_b' => $request->option_b,
            'option_c' => $request->option_c,
            'option_d' => $request->option_d,
            'correct_answer' => $request->correct_answer,
            'explanation' => $request->explanation,
            'language' => $request->language ?? null,
            'level' => $request->level,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Quiz item added successfully!');
    }

    public function show($id)
    {
        //
    }

   
    public function updateLesson(Request $request, $id)
    {
        try {
            $lesson = Lesson::findOrFail($id);
            $lesson->name = $request->name;
            $lesson->title = $request->title;
            $lesson->save();

            return response()->json(['success' => true, 'message' => 'Cập nhật thành công!']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Lỗi cập nhật'], 500);
        }
    }

    public function updatePassage(Request $request, $id)
    {
        $passage = Passage::find($id);
        if (!$passage) {
            return response()->json(['error' => 'Không tìm thấy bài học'], 404);
        }

        $passage->description = $request->description;
        $passage->save();

        return response()->json(['success' => 'Cập nhật thành công']);
    }
    public function updateStructure(Request $request, $id)
    {
        $structure = Structure::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'structure' => 'required|string|max:255',
            'example' => 'nullable|string|max:255',
            'translation' => 'nullable|string|max:255',
            'explanation' => 'nullable|string|max:255',
            'level' => 'required|integer',
            'status' => 'required|integer',
            'lesson_id' => 'required|integer|exists:lessons,id',
        ]);

        $structure->update([
            'name' => $request->name,
            'structure' => $request->structure,
            'example' => $request->example,
            'translation' => $request->translation,
            'explanation' => $request->explanation,
            'level' => $request->level,
            'status' => $request->status,
            'lesson_id' => $request->lesson_id,
        ]);

        return redirect()->back()->with('success', 'Updated successfully!');
    }

    public function updateQuizItem(Request $request, $id)
    {
        $quizItem = QuizItem::findOrFail($id);
        
        $quizItem->update([
            'lesson_id' => $request->lesson_id,
            'question' => $request->question,
            'option_a' => $request->option_a,
            'option_b' => $request->option_b,
            'option_c' => $request->option_c,
            'option_d' => $request->option_d,
            'correct_answer' => $request->correct_answer,
            'explanation' => $request->explanation,
            'level' => $request->level,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Cập nhật thành công!');
    }


   
    public function update(Request $request, $id)
    {
        //
    }

    public function deletePassage($id)
    {
        $passage = Passage::find($id);
        if (!$passage) {
            return response()->json(['error' => 'Không tìm thấy bài học'], 404);
        }

        $passage->delete();
        return response()->json(['success' => 'Xóa thành công']);
    }
    
    public function destroy($id)
    {
        //
    }
}
