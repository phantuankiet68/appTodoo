<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\Auth;
use App\Models\Issue;
use App\Models\Comment;
use App\Models\User;
use App\Models\IssueUser;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $userId = Auth::id();
        
        $categoryId = $request->get('category_id');
        $userFilterId = $request->get('user_id');
        $search = $request->get('search');
    
        try {
            $issuesQuery = Issue::with(['category', 'user'])
                ->where(function($query) use ($userId) {
                    $query->where('user_id', $userId)
                        ->orWhereHas('assignedUsers', function ($query) use ($userId) {
                            $query->where('user_id', $userId);
                        });
                })
                ->orderBy('id', 'asc');

            if ($categoryId && $categoryId !== 'All') {
                $issuesQuery->where('category_id', $categoryId);
            }
    
            if ($userFilterId) {
                $issuesQuery->where('user_id', $userFilterId);
            }

            if ($search) {
                $issuesQuery->where(function($query) use ($search) {
                    $query->where('subject', 'like', '%' . $search . '%')
                        ->orWhere('key', 'like', '%' . $search . '%')
                        ->orWhere('description', 'like', '%' . $search . '%')
                        ->orWhere('start_date', 'like', '%' . $search . '%')
                        ->orWhere('end_date', 'like', '%' . $search . '%');
                });
            }
    
            $issues = $issuesQuery->paginate(11);
    
            $categories = Category::where('user_id', $userId)
                        ->where('key', 3)
                        ->get(); 
    
            $users = User::all();
    
            return view('issue.index', compact('categories', 'users', 'issues', 'search'));
    
        } catch (\Exception $e) {
            Log::error('Error fetching issues: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi lấy danh sách vấn đề. Vui lòng thử lại.');
        }
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
            'key' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|integer',
        ], [
            'subject.required' => __('validation.subject_required'),
            'key.required' => __('validation.key_required'),
            'description.required' => __('validation.description_required'),
            'description.string' => __('validation.description_string'),
            'start_date.required' => __('validation.start_date_required'),
            'start_date.date' => __('validation.start_date_date'),
            'end_date.required' => __('validation.end_date_required'),
            'end_date.date' => __('validation.end_date_date'),
            'end_date.after_or_equal' => __('validation.end_date_after_or_equal'),
            'category_id.required' => __('validation.category_id_required'),
            'category_id.exists' => __('validation.category_id_exists'),
            'status.required' => __('validation.status_required'),
            'status.integer' => __('validation.status_integer'),
        ]);
  
        Issue::create([
            'user_id' => Auth::id(),
            'subject' => $request->subject,
            'key' => $request->key,
            'description' => $request->description,
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
        $users = User::all();

        $issueUsers = IssueUser::with(['user'])->where('issue_id', $id)->get();

        $comments = Comment::with(['issue', 'user'])->where('issue_id', $id)->paginate(12);
        return view('issue.show', compact('issue','comments','users','issueUsers'));
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
