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
        $locale = session('locale', 'en');
    
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
    
        $languageId = $languageMap[$locale] ?? 2;

        $lessons = Lesson::where('language', $languageId)
            ->where('difficulty', 1)
            ->orderBy('id', 'asc')
            ->get();
    
        $duplicatedNames = Vocabulary::select('name')
            ->groupBy('name')
            ->havingRaw('COUNT(name) > 1')
            ->pluck('name');
            
        $vocabularies = Vocabulary::whereIn('name', $duplicatedNames)
            ->where('language', operator: $languageId)
            ->where('difficulty', 1)
            ->get();

        return view('pages.english.index', compact( 'vocabularies','lessons'));
    }

    public function indexsearch(Request $request) {
        $locale = session('locale', 'en');
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
        $languageId = $languageMap[$locale] ?? 2;
    
        $query = $request->input('query');
    
        $vocabulary = Vocabulary::where('language', $languageId)
            ->where('difficulty', 1)
            ->where(function ($q) use ($query) {
                $q->where('name', 'LIKE', "%$query%")
                  ->orWhere('meaning', 'LIKE', "%$query%")
                  ->orWhere('example', 'LIKE', "%$query%")
                  ->orWhere('translation', 'LIKE', "%$query%");
            })
            ->first();
    
        return response()->json($vocabulary);
    }
    

    public function showLesson($name)
    {
        $locale = session('locale', 'en');
    
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
    
        $languageId = $languageMap[$locale] ?? 2;

        $name = urldecode($name);
        $lesson = Lesson::where('name', $name)->where('difficulty', 1)->first();
    
        $duplicatedNames = Vocabulary::select('name')
            ->groupBy('name')
            ->havingRaw('COUNT(name) > 1')
            ->pluck('name');
            
        $vocabularies = Vocabulary::whereIn('name', $duplicatedNames)
            ->where('difficulty', 1)
            ->where('language', operator: $languageId)
            ->get();

        $passage = Passage::where('language', $lesson->id)
            ->where('lesson_id', 1)
            ->orderBy('id', 'asc')
            ->with('user', 'lesson')
            ->first();
        
        return view('pages.english.pagePassage.index', compact('passage', 'vocabularies','lesson'));
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
            ->where('difficulty', 1)
            ->orderBy('id', 'asc')
            ->get();

        $duplicatedNames = Vocabulary::select('name')
            ->groupBy('name')
            ->havingRaw('COUNT(name) > 1')
            ->pluck('name');
        
        $vocabularies = Vocabulary::whereIn('name', $duplicatedNames)
            ->where('difficulty', 1)
            ->orderBy('id', 'desc')
            ->get();

        return view('pages.english.vocabulary.index', compact('lessons','vocabularies'));
    }

    public function showVocabulary($name)
    {
        $locale = session('locale', 'en');
    
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
    
        $languageId = $languageMap[$locale] ?? 2;

        $duplicatedNames = Vocabulary::select('name')
            ->groupBy('name')
            ->havingRaw('COUNT(name) > 1')
            ->pluck('name');
        
        $vocabularies = Vocabulary::whereIn('name', $duplicatedNames)
            ->where('difficulty', 1)
            ->where('language', operator: $languageId)
            ->get();

        $name = urldecode($name);

        $lesson = Lesson::where('name', $name)->where('difficulty', 1)->first();
    
        $vocabularie = Vocabulary::where('language', $languageId)
            ->where('difficulty', 1)
            ->where('language', $lesson->id)
            ->orderBy('id', 'asc')
            ->get();


        return view('pages.english.pageVocabulary.index', compact('vocabularie', 'vocabularies','lesson'));
    }

    public function searchVocabulary(Request $request)
    {
        $query = $request->input('query');

        $vocabularies = Vocabulary::where('name', 'LIKE', "%{$query}%")
            ->where('difficulty', 1)
            ->get();

        return response()->json($vocabularies);
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
            ->where('difficulty', 1)
            ->orderBy('id', 'asc')
            ->get();

        $passages = Passage::where('language', 2)
            ->where('difficulty', 1)
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
            ->where('difficulty', 1)
            ->orderBy('id', 'asc')
            ->get();

        $structures = Structure::whereHas('lesson', function ($query) {
            $query->where('language', 2);
        })
        ->orderBy('id', 'asc')
        ->where('difficulty', 1)
        ->with('user', 'lesson')
        ->get();
        return view('pages.english.structure.index',compact('structures','lessons'));
    }

    public function showStructure($name)
    {
        $locale = session('locale', 'en');
    
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
    
        $languageId = $languageMap[$locale] ?? 2;


        $name = urldecode($name);

        $lesson = Lesson::where('name', $name)->where('difficulty', 1)->first();
    
        $structures = Structure::where('language', $languageId)
            ->where('difficulty', 1)
            ->where('language', $lesson->id)
            ->orderBy('id', 'asc')
            ->get();


        return view('pages.english.pageStructure.index', compact('structures','lesson'));
    }

    public function showLearnVocabulary($name)
    {
        $locale = session('locale', 'en');
    
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
    
        $languageId = $languageMap[$locale] ?? 2;

        $name = urldecode($name);

        $lesson = Lesson::where('name', $name)->where('difficulty', 1)->first();
    
        $vocabularie = Vocabulary::where('language', $languageId)
            ->where('difficulty', 1)
            ->where('language', $lesson->id)
            ->orderBy('id', 'asc')
            ->get();


        return view('pages.english.pageLearnVocabulary.index', compact('vocabularie','lesson'));
    }

    public function showCheckVocabulary($name)
    {
        $locale = session('locale', 'en');
    
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
    
        $languageId = $languageMap[$locale] ?? 2;

        $name = urldecode($name);

        $lesson = Lesson::where('name', $name)->where('difficulty', 1)->first();
    
        $quizItem = QuizItem::where('difficulty', 1)
            ->where('lesson_id', $lesson->id)
            ->where('quiz_category_id', 1)
            ->orderBy('id', 'asc')
            ->get();

        return view('pages.english.pageCkeckVocabulary.index', compact('quizItem','lesson'));
    }

    public function showCheckStructure($name)
    {
        $locale = session('locale', 'en');
    
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
    
        $languageId = $languageMap[$locale] ?? 2;

        $name = urldecode($name);

        $lesson = Lesson::where('name', $name)->where('difficulty', 1)->first();
        
        $quizItem = QuizItem::where('language', 2)
            ->where('lesson_id', $lesson->id)
            ->where('difficulty', 1)
            ->where('quiz_category_id', 2)
            ->orderBy('id', 'asc')
            ->get();


        return view('pages.english.pageCheckStructure.index', compact('quizItem','lesson'));
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
            ->where('difficulty', 1)
            ->orderBy('id', 'asc')
            ->get();

        $categories = QuizCategory::all();

        $quizItems = QuizItem::where('quiz_category_id', 1)
            ->where('difficulty', 1)
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
            ->where('difficulty', 1)
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
                'user_id' => Auth::id(),
                'name' => $request->name,
                'title' => $request->title,
                'difficulty' => 1,
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
                'difficulty' => 1,
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
            'difficulty' => 1,
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
            'difficulty' => 1,
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
            'difficulty' => 1,
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
