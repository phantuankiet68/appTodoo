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
    public function index()
    {
        $userId = Auth::id();

        $issues = Issue::where('user_id', $userId)
            ->orWhereHas('assignedUsers', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->with(['category', 'user'])
            ->orderBy('id', 'asc')
            ->paginate(11);
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
    public function search(Request $request)
    {
        $userId = Auth::id();
    
        // Lấy tất cả danh mục của user
        $category = Category::where('user_id', $userId)
                            ->where('key', 3)
                            ->get();
    
        // Tạo query để lấy issues
        $issuesQuery = Issue::where('user_id', $userId)
            ->orWhereHas('assignedUsers', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->with(['category', 'user']);
    
        // Kiểm tra nếu có giá trị category_id từ request
        if ($request->filled('category_id')) {
            $issuesQuery->where('category_id', $request->category_id);
        }
    
        // Thực thi query và phân trang kết quả
        $issues = $issuesQuery->orderBy('id', 'asc')->paginate(11);
    
        return view('issue.index', compact('category', 'issues'));
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
