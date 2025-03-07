<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\MemberProject;
use App\Models\AttachmentProject;
use App\Models\IssueProject;
use App\Models\Comment;
use App\Models\NoteProject;
use Illuminate\Support\Facades\Log; 
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class V1ProjectController extends Controller
{
   
    public function index()
    {
        $users = User::all();
        $projects = Project::all();
        return view('pages.project.index', compact('projects','users'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'users' => 'required|array',
            'git' => 'nullable|url',
            'file' => 'nullable|file',
            'document' => 'nullable|file',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif',
        ]);

        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = uniqid() . '_' . hash('sha256', $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $filePath = 'assets/files/' . $filename;
            $file->move(public_path('assets/files'), $filename);
        }

        $documentPath = null;
        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $filename = uniqid() . '_' . hash('sha256', $document->getClientOriginalName()) . '.' . $document->getClientOriginalExtension();
            $documentPath = 'assets/documents/' . $filename;
            $document->move(public_path('assets/documents'), $filename);
        }

        $imagePath = null;
        if ($request->hasFile('image') && $request->file('image')->isValid()) { // Kiểm tra nếu có tệp và tệp hợp lệ
            $image = $request->file('image');
            $filename = uniqid() . '_' . hash('sha256', $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
            $imagePath = 'assets/images/' . $filename;
            $image->move(public_path('assets/images'), $filename);
        }

        $project = Project::create([
            'name' => $request->name,
            'user_id' => $request->user_id,
            'description' => $request->description,
            'git' => $request->git,
            'file' => $filePath,
            'document' => $documentPath,
            'images' => $imagePath,
        ]);

        $project->users()->attach($request->users);

        return redirect()->route('projects.index')->with('success', 'Dự án đã được tạo!');
    }

    public function show($project)
    {
        $project = Project::where('name', urldecode($project))->first();

        if (!$project) {
            return redirect()->route('projects.index')->with('error', 'Dự án không tồn tại.');
        }

        $issues = IssueProject::where('project_id', $project->id)
            ->with('user', 'assignee')
            ->get();

        $notes = NoteProject::where('project_id', $project->id)
            ->with('user')
            ->get();

        return view('pages.project.show.index', compact('project', 'issues','notes'));
    }

    public function showIssues(Request $request, $name)
    {
        $project = Project::where('name', urldecode($name))->first();

        if (!$project) {
            return redirect()->route('projects.index')->with('error', 'Dự án không tồn tại.');
        }

        $query = IssueProject::where('project_id', $project->id)->with('user', 'assignee');

        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }

        if ($request->has('priority') && $request->priority != '') {
            $query->where('priority', $request->priority);
        }

        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }

        if ($request->has('assignee') && $request->assignee != '') {
            $query->where('assignee_id', $request->assignee);
        }

        if ($request->has('milestone') && $request->milestone != '') {
            $query->where('milestone', $request->milestone);
        }

        if ($request->has('title') && $request->title != '') {
            $query->where('title', 'LIKE', '%' . $request->title . '%');
        }

        $issues = $query->get();
        $members = MemberProject::where('project_id', $project->id)->with('user')->get();

        if ($request->ajax()) {
            return response()->json(['issues' => $issues]);
        }

        return view('pages.project.issue.index', compact('project', 'issues', 'members'));
    }

    public function getProjects()
    {
        try {
            $projects = IssueProject::where('key', 'LIKE', 'aaa-%')->pluck('key');
            Log::info("Dữ liệu lấy từ DB:", $projects->toArray()); 
            return response()->json($projects);
        } catch (\Exception $e) {
            Log::error("Lỗi API getProjects: " . $e->getMessage());
            return response()->json(['error' => 'Có lỗi xảy ra'], 500);
        }
    }
    

    public function showIssueDetail($name, $key)
    {
        $project = Project::where('name', $name)->firstOrFail();
        $issue = IssueProject::where('key', $key)->where('project_id', $project->id)->firstOrFail();
        $members = MemberProject::where('project_id', $project->id)->with('user')->get();

        $comments = Comment::where('issue_project_id', $issue->id)->with('user','assignee')->get();
        
        $attachment = AttachmentProject::where('issue_project_id', $issue->id)->get();
        
        
        return view('pages.project.issueDetail.index', compact('project', 'issue', 'members', 'comments', 'attachment'));
    }




    public function member($name, Request $request)
    {
        $project = Project::where('name', urldecode($name))->first();
    
        if (!$project) {
            return redirect()->route('projects.index')->with('error', 'Dự án không tồn tại.');
        }
    
        $query = MemberProject::where('project_id', $project->id)
            ->with('user')
            ->where('role', 0);

        if ($request->has('search_leader') && !empty($request->search_leader)) {
            $query->whereHas('user', function ($q) use ($request) {
                $q->where('full_name', 'like', '%' . $request->search_leader . '%');
            });
        }

        $member_leader = $query->get();

        $query = MemberProject::where('project_id', $project->id)
            ->with('user')
            ->where('role', 1);

        if ($request->has('search_member') && !empty($request->search_member)) {
            $query->whereHas('user', function ($q) use ($request) {
                $q->where('full_name', 'like', '%' . $request->search_member . '%');
            });
        }

        $members = $query->get();

    
        return view('pages.project.member.index', compact('project', 'member_leader', 'members'));
    }
    


    public function addMembers(Request $request, Project $project)
    {
        $request->validate([
            'user_ids' => 'required',
            'role' => 'required|in:0,1',
        ]);

        $userIds = explode(',', $request->user_ids); // Chuyển user_ids thành mảng
        $role = $request->role;

        foreach ($userIds as $userId) {
            MemberProject::updateOrCreate(
                ['project_id' => $project->id, 'user_id' => $userId],
                ['role' => $role]
            );
        }

        return response()->json(['success' => true, 'message' => 'Thêm thành viên thành công!']);
    }

    public function addIssue($name)
    {
        $project = Project::where('name', urldecode($name))->first();

        if (!$project) {
            return redirect()->route('projects.index')->with('error', 'Dự án không tồn tại.');
        }

        $members = MemberProject::where('project_id', $project->id)->with('user')->get();

        return view('pages.project.addIssue.index', compact('project', 'members'));
    }

    public function storeIssue(Request $request)
    {
        $request->validate([
            'project_id' => 'required|exists:projects,id',
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'due_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|integer|in:1,2,3,4',
            'priority' => 'required|integer|in:1,2,3',
            'category' => 'required|integer|in:1,2,3',
            'assignee' => 'nullable|exists:users,id',
            'milestone' => 'nullable|integer|in:1,2',
            'key' => 'required|string|max:255',
            'attachments.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $issue = IssueProject::create([
            'project_id' => $request->project_id,
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'due_date' => $request->due_date,
            'status' => $request->status,
            'priority' => $request->priority,
            'category' => $request->category,
            'assignee_id' => $request->assignee,
            'milestone' => $request->milestone,
            'key' => $request->key,
        ]);

        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $filename = uniqid() . '_' . hash('sha256', $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/images'), $filename);
                AttachmentProject::create([
                    'issue_project_id' => $issue->id,
                    'file_path' => 'assets/images/' . $filename,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Issue created successfully.');
    }

    public function storeAttachmentProject(Request $request)
    {
        $request->validate([
            'issue_project_id' => 'required',
            'attachments.*' => 'required|file',
        ]);

        foreach ($request->file('attachments') as $file) {
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $cleanFileName = Str::slug($originalName) . '.' . $file->getClientOriginalExtension();
            $filePath = 'assets/files/' . $cleanFileName;
        
            if (!file_exists(public_path('assets/files'))) {
                mkdir(public_path('assets/files'), 0777, true);
            }
        
            $file->move(public_path('assets/files'), $cleanFileName);
        
            AttachmentProject::create([
                'issue_project_id' => $request->issue_project_id,
                'file_path' => $filePath,
            ]);
        }

        return redirect()->back()->with('success', 'Files uploaded successfully.');
    }


    public function storeNoteProject(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'project_id' => 'required|exists:projects,id',
        ]);

        NoteProject::create([
            'user_id' => Auth::id(),
            'project_id' => $request->project_id,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Note added successfully!');
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
        //
    }
}
