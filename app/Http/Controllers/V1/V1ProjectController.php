<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
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

    public function show($name)
    {
        $project = Project::where('name', $name)->first();

        if (!$project) {
            return redirect()->route('projects.index')->with('error', 'Dự án không tồn tại.');
        }

        return view('pages.project.show.index', compact('project'));
    }


   
    
    public function addIssue($name)
    {
        $project = Project::where('name', urldecode($name))->first();

        if (!$project) {
            return redirect()->route('projects.index')->with('error', 'Dự án không tồn tại.');
        }

        return view('pages.project.addIssue.index', ['project' => $project]);
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
