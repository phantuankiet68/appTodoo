<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\MemberProject;
use App\Models\AttachmentProject;
use App\Models\IssueProject;

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

        return view('pages.project.show.index', compact('project', 'issues'));
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
