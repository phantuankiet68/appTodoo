<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Link;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;
class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::where('user_id', Auth::id())->get();
        $notes = Note::where('user_id', Auth::id())->get();
        return view('note.index', compact('links','notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $issue = Link::findOrFail($id);
            $issue->delete();
            return redirect()->back()->with('success', 'Deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete the issue.');
        }
    }
    public function destroyA($id)
    {
        try {
            $issue = Note::findOrFail($id);
            $issue->delete();
            return redirect()->back()->with('success', 'Deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete the issue.');
        }
    }
}
