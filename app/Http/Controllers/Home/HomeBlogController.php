<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ViewNow;
use App\Models\LikeNow;
use App\Models\ShareNow;
use App\Models\Blog;

class HomeBlogController extends Controller
{
   
    public function index()
    {
        $blogs = Blog::get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function index_home()
    {
        
        $locale = session('locale', 'en');
        
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
    
        $languageId = $languageMap[$locale] ?? 2;
    
        $blogs = Blog::withCount(['views', 'likes','shares'])
            ->where('language', $languageId)
            ->orderBy('id', 'desc')
            ->get();

        $totalViews = ViewNow::whereNotNull('blog_id')->count();
        $totalLikes = LikeNow::whereNotNull('blog_id')->count();
        $totalShares = ShareNow::whereNotNull('blog_id')->count();

        return view('home.blog.index', compact('blogs','totalViews', 'totalLikes','totalShares'));
    }

   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'title' => 'required|string|max:255',
            'language' => 'required|integer',
            'choose' => 'required|integer',
            'content' => 'nullable|string',
            'description' => 'nullable|string',
            'html' => 'nullable|string',
            'css' => 'nullable|string',
            'javascript' => 'nullable|string',
            'front_end' => 'nullable|string',
            'back_end' => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|boolean',
        ]);

        // Escape HTML trước khi lưu vào database
        $validatedData['html'] = $request->has('html') ? htmlspecialchars($request->input('html')) : null;
        $validatedData['css'] = $request->has('css') ? htmlspecialchars($request->input('css')) : null;
        $validatedData['javascript'] = $request->has('javascript') ? htmlspecialchars($request->input('javascript')) : null;
        $validatedData['front_end'] = $request->has('front_end') ? htmlspecialchars($request->input('front_end')) : null;
        $validatedData['back_end'] = $request->has('back_end') ? htmlspecialchars($request->input('back_end')) : null;

        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');

            $originalName = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();

            $sanitizedFilename = str_replace(' ', '_', pathinfo($originalName, PATHINFO_FILENAME));
            $filename = time() . '_' . $sanitizedFilename . '.' . $extension;

            $image->move(public_path('assets/images'), $filename);

            $validatedData['image_path'] = 'assets/images/' . $filename;
        }

        Blog::create($validatedData);

        return redirect()->back()->with('success', __('messages.Blog saved successfully!'));
    }

    public function view($id)
    {
        $locale = session('locale', 'en');
        
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
    
        $languageId = $languageMap[$locale] ?? 2;

        $blogs = Blog::findOrFail($id);

        $blogList = Blog::where('language', $languageId)
        ->orderBy('id', 'desc')
        ->limit(6)
        ->get();

        $totalViews = ViewNow::where('blog_id', $id)->count();
        $totalShares = ShareNow::where('blog_id', $id)->count();
        $totalLikes = LikeNow::where('blog_id', $id)->count();

        ViewNow::create([
            'blog_id' => $id,
            'view_count' => 1,
        ]);


        return view('home.blog.showBlog', compact('blogs', 'blogList','totalViews','totalLikes', 'totalShares'));
    }

    public function store_like(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        
        LikeNow::create([
            'blog_id' => $blog->id,
            'view_count' => 1, 
        ]);

        return redirect()->route('new_experience.view', $blog->id)
                        ->with('success', 'Like added successfully!');
    }

    public function store_share(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        
        ShareNow::create([
            'blog_id' => $blog->id,
            'view_count' => 1, 
        ]);

        return redirect()->route('new_experience.view', $blog->id)
                        ->with('success', 'Like added successfully!');
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
        //
    }
}
