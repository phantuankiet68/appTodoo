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


class V1JapaneseController extends Controller
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

        $lessons = Lesson::where('difficulty', 2)
            ->orderBy('id', 'asc')
            ->get();
    
        $duplicatedNames = Vocabulary::select('name')
            ->groupBy('name')
            ->havingRaw('COUNT(name) > 1')
            ->pluck('name');
            
        $vocabularies = Vocabulary::whereIn('name', $duplicatedNames)
            ->where('language', $languageId)
            ->where('difficulty', 2)
            ->orderBy('id', 'desc')
            ->get();

        return view('pages.japanese.index', compact( 'vocabularies','lessons'));
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
            ->where('difficulty', 2)
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

        $lesson = Lesson::where('name', $name)->where('difficulty', 2)->first();
    
        $duplicatedNames = Vocabulary::select('name')
            ->groupBy('name')
            ->havingRaw('COUNT(name) > 1')
            ->pluck('name');
            
        $vocabularies = Vocabulary::whereIn('name', $duplicatedNames)
            ->where('lesson_id', $lesson->id)
            ->where('language', $languageId)
            ->where('difficulty', 2)
            ->get();

        $passage = Passage::with('user', 'lesson')
            ->where('difficulty', 2)
            ->where('lesson_id', $lesson->id)
            ->first();
        
        return view('pages.japanese.pagePassage.index', compact('passage', 'vocabularies','lesson'));
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

        $name = urldecode($name);

        $lesson = Lesson::where('name', $name)->where('difficulty', 2)->first();
    
        $vocabularie = Vocabulary::where('language', $languageId)
            ->where('difficulty', 2)
            ->where('lesson_id', $lesson->id)
            ->orderBy('id', 'asc')
            ->get();

        return view('pages.japanese.pageVocabulary.index', compact('vocabularie','lesson'));
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

        $lesson = Lesson::where('name', $name)->where('difficulty', 2)->first();

        $duplicatedNames = Structure::select('structure')
            ->groupBy('structure')
            ->havingRaw('COUNT(name) > 1')
            ->pluck('structure');

        $structures = Structure::whereIn('structure', $duplicatedNames)
            ->where('language', $languageId)
            ->where('difficulty', 2)
            ->where('lesson_id', $lesson->id)
            ->orderBy('id', 'asc')
            ->get();


        return view('pages.japanese.pageStructure.index', compact('structures','lesson'));
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

        $lesson = Lesson::where('name', $name)->where('difficulty', 2)->first();
    
        $vocabularie = Vocabulary::where('language', $languageId)
            ->where('difficulty', 2)
            ->where('lesson_id', $lesson->id)
            ->orderBy('id', 'asc')
            ->get();


        return view('pages.japanese.pageLearnVocabulary.index', compact('vocabularie','lesson'));
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

        $lesson = Lesson::where('name', $name)->where('difficulty', 2)->first();

        $quizItem = QuizItem::where('language', $languageId)
            ->where('lesson_id', $lesson->id)
            ->where('quiz_category_id', 1)
            ->where('difficulty', 2)
            ->orderBy('id', 'asc')
            ->get();


        return view('pages.japanese.pageCkeckVocabulary.index', compact('quizItem','lesson'));
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

        $lesson = Lesson::where('name', $name)->where('difficulty', 2)->first();
        
        $quizItem = QuizItem::where('language', 2)
            ->where('lesson_id', $lesson->id)
            ->where('difficulty', 2)
            ->where('quiz_category_id', 2)
            ->orderBy('id', 'asc')
            ->get();


        return view('pages.japanese.pageCheckStructure.index', compact('quizItem','lesson'));
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
    
        $lessons = Lesson::where('difficulty', 2)
            ->orderBy('id', 'asc')
            ->get();

        $duplicatedNames = Vocabulary::select('name')
            ->groupBy('name')
            ->havingRaw('COUNT(name) > 1')
            ->pluck('name');
        
        $vocabularies = Vocabulary::whereIn('name', $duplicatedNames)
            ->where('difficulty', 2)
            ->orderBy('id', 'desc')
            ->get();

        return view('pages.japanese.vocabulary.index', compact('lessons','vocabularies'));
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

        $lessons = Lesson::where('difficulty', 2)
            ->orderBy('id', 'asc')
            ->get();

        $structures = Structure::whereHas('lesson', function ($query) {
            $query;
        })
        ->orderBy('id', 'asc')
        ->where('difficulty', 2)
        ->with('user', 'lesson')
        ->get();
        return view('pages.japanese.structure.index',compact('structures','lessons'));
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

        $lessons = Lesson::where('difficulty', 2)
            ->orderBy('id', 'asc')
            ->get();

        $passages = Passage::where('difficulty', 2)
            ->orderBy('id', 'asc')
            ->with('user', 'lesson')
            ->get();
            

        return view('pages.japanese.passage.index', compact('passages','lessons'));
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

        $lessons = Lesson::where('difficulty', 2)
            ->orderBy('id', 'asc')
            ->get();

        $categories = QuizCategory::all();

        $quizItems = QuizItem::where('quiz_category_id', 1)
            ->where('difficulty', 2)
            ->orderBy('id', 'desc')
            ->with('user', 'lesson')
            ->get();

        return view('pages.japanese.quizItem.index',compact('quizItems','categories','lessons'));
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

        $lessons = Lesson::where('difficulty', 2)
        ->orderBy('id', 'asc')
            ->get();

        $categories = QuizCategory::all();

        $quizItems = QuizItem::where('quiz_category_id', 2)
            ->where('difficulty', 2)
            ->orderBy('id', 'desc')
            ->with('user', 'lesson')
            ->get();
        
        
        return view('pages.japanese.quizStructure.index',compact('quizItems','categories','lessons'));
    }

    public function search_quiz_structure(Request $request)
    {
        $query = $request->query('query');

        $quizItems = QuizItem::where('question', 'LIKE', "%{$query}%")
            ->where('quiz_category_id', 2)
            ->where('difficulty', 2)
            ->orderBy('id', 'desc')
            ->get();

        return response()->json($quizItems);
    }

}
