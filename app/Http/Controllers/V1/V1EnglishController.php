<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Vocabulary;
use App\Models\Passage;
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

        $passages = Passage::orderBy('id', 'asc')->get();

        return view('pages.english.passage.index', compact('passages','lessons'));
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

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
