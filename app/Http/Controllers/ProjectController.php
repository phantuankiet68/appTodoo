<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;

class ProjectController extends Controller
{
    public function index()
    {
        $users = User::all();
        $projects = auth()->user()->projects;
        return view('projects.index', compact('projects','users'));
    }


    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'users' => 'required|array',
            'git' => 'nullable|url',
            'file' => 'nullable|file',
            'document' => 'nullable|file',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif', // Chỉ cho phép hình ảnh
        ]);

        // Handle file uploads
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

        // Handle single image upload
        $imagePath = null;
        if ($request->hasFile('image') && $request->file('image')->isValid()) { // Kiểm tra nếu có tệp và tệp hợp lệ
            $image = $request->file('image');
            $filename = uniqid() . '_' . hash('sha256', $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
            $imagePath = 'assets/images/' . $filename;
            $image->move(public_path('assets/images'), $filename);
        }

        // Tạo dự án và lưu đường dẫn tệp vào cơ sở dữ liệu
        $project = Project::create([
            'name' => $request->name,
            'user_id' => $request->user_id,
            'description' => $request->description,
            'git' => $request->git,
            'file' => $filePath,
            'document' => $documentPath,
            'images' => $imagePath, // Lưu đường dẫn của ảnh vào cơ sở dữ liệu
        ]);

        // Gắn người dùng vào dự án
        $project->users()->attach($request->users);

        return redirect()->route('projects.index')->with('success', 'Dự án đã được tạo!');
    }

    
    
}
