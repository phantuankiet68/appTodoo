<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\Auth;
use App\Models\Issue;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issues = Issue::with(['category', 'user'])->where('user_id', Auth::id())->orderBy('id', 'asc')->paginate(11);
        $category = Category::where('user_id', Auth::id())
                    ->where('key', 3)
                    ->paginate(12);
        return view('issue.index', compact('category','issues'));
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
        $request->validate([
            'subject' => 'required|string|max:255',
            'key' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|integer',
        ]);

        Issue::create([
            'user_id' => Auth::id(),
            'subject' => $request->subject,
            'key' => $request->key,
            'level' => $request->level,
            'description' => $request->description,
            'reference' => $request->reference,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'category_id' => $request->category_id,
            'status' => $request->status,
        ]);

        return redirect()->route('issue.index')->with('success', 'Issue created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $issue = Issue::findOrFail($id);
        return view('issue.show', compact('issue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $issue = Issue::findOrFail($id);
        return view('issues.edit', compact('issue'));
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
        $request->validate([
            'subject' => 'required|string|max:255',
            'key' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'category_id' => 'required|exists:categories,id',
        ]);

        $issue = Issue::findOrFail($id);
        $issue->update($request->all());

        return redirect()->route('issues.index')->with('success', 'Issue updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $issue = Issue::findOrFail($id);
        $issue->delete();

        return redirect()->route('issues.index')->with('success', 'Issue deleted successfully');
    }
}
