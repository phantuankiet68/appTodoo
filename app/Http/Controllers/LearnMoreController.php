<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LearnMore;
use PDF;

class LearnMoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $userId = auth()->user()->id;
    
        try {
            $learnQuery = LearnMore::with(['user'])
                ->where(function($query) use ($userId) {
                    $query->where('user_id', $userId);
                })
                ->orderBy('id', 'desc'); 
            if ($search) {
                $learnQuery->where(function($query) use ($search) {
                    $query->where('vocabulary', 'like', '%' . $search . '%')
                        ->orWhere('meaning_of_vocabulary', 'like', '%' . $search . '%')
                        ->orWhere('example', 'like', '%' . $search . '%')
                        ->orWhere('meaning_of_example', 'like', '%' . $search . '%');
                });
            }
    
            $learn_more = $learnQuery->paginate(6);
    
            return view('learnMore.index', compact('learn_more'));
    
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }

    public function create()
    {
        return view('learnMore.create'); // Hiển thị form tạo từ vựng mới
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'language_id' => 'required|exists:languages,id',
            'vocabulary' => 'required|string|max:255',
            'meaning_of_vocabulary' => 'required|string|max:255',
            'example' => 'required|string|max:255',
            'meaning_of_example' => 'required|string|max:255',
            'status' => 'required',
        ]);

        LearnMore::create($request->all());

        return redirect()->route('learn_more.index')->with('success', 'Vocabulary created successfully.'); // Chuyển hướng về danh sách
    }
    public function show($id)
    {
        $learnMore = LearnMore::with(['user'])->findOrFail($id);
        return response()->json($learnMore);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'language_id' => 'required|exists:languages,id',
            'vocabulary' => 'required|string|max:255',
            'meaning_of_vocabulary' => 'required|string|max:255',
            'example' => 'nullable|string|max:255',
            'meaning_of_example' => 'nullable|string|max:255',
        ]);

        $learnMore = LearnMore::findOrFail($id);
        $learnMore->update($request->all());

        return redirect()->route('learn_more.index')->with('success', 'Vocabulary updated successfully.');
    }

    public function destroy($id)
    {
        $learnMore = LearnMore::findOrFail($id);
        $learnMore->delete();
        return redirect()->route('learn_more.index')->with('success', 'Deleted successfully');
    }

    public function exportPdf()
    {
        $learn_more = LearnMore::where('language_id', 3)->orderBy('id', 'asc')->get();
        $pdf = PDF::loadView('learnMore.pdf', compact('learn_more'))
                ->setPaper('a3', 'landscape')
                ->set_option('isHtml5ParserEnabled', true)
                ->set_option('isUnicodeEnabled', true);
        return $pdf->download('learnMore.pdf');
    }
    public function addTest($status = null)
    {
        if (is_null($status)) {
            $status = 1;
        }
    
        $tests = LearnMore::where('language_id', 3)
                          ->where('status', $status)
                          ->orderBy('id', 'asc')
                          ->get();
        return view('learnMore.test.index', compact('tests'));
    }
}
