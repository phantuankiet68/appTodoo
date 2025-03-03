<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NotePad;
use Illuminate\Support\Facades\Auth;

class V1NoteController extends Controller
{
   
    public function index()
    {
        $notepad = NotePad::where('user_id', Auth::id())->get();
        return view('pages.note.index',compact('notepad'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'current_date' => 'required|date',
            'title' => 'required|string|max:255',
            'url' => 'nullable|url',
        ], [
            'user_id.required' => __('validation.user_id_required'),
            'user_id.exists' => __('validation.user_id_exists'),
            'current_date.required' => __('validation.date_required'),
            'current_date.date' => __('validation.date_date'),
            'title.required' => __('validation.title_required'),
            'title.string' => __('validation.title_string'),
            'title.max' => __('validation.title_max'),
            'url.required' => __('validation.url_required'),
            'url.url' => __('validation.url_url'),
        ]);

        $top = rand(50, 800);
        $left = rand(50, 1200);

        NotePad::create([
            'user_id' => $request->user_id,
            'current_date' => $request->current_date,
            'title' => $request->title,
            'url' => $request->url,
            'top' => $top,
            'left' => $left
        ]);

        return redirect()->back()->with('success', __('messages.Note Pad added successfully!'));
    }

    public function updatePosition(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:note_pads,id',
            'top' => 'required|integer',
            'left' => 'required|integer'
        ]);

        $note = NotePad::findOrFail($request->id);
        $note->update([
            'top' => $request->top,
            'left' => $request->left
        ]);

        return response()->json(['message' => 'Position updated successfully']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $note = NotePad::find($id);
    
        if (!$note) {
            return response()->json(['message' => 'Expense not found'], 404);
        }
    
        $note->delete();
    
        return response()->json(['message' => 'Expense deleted successfully']);
    }
}
