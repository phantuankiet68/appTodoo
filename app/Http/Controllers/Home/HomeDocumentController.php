<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\documentHome;
use App\Models\ViewNow;
use App\Models\LikeNow;
use App\Models\ShareNow;

class HomeDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = documentHome::get();
        return view('admin.document.index', compact('documents'));
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
    
        $documents = documentHome::withCount(['views', 'likes','shares'])
            ->where('language', $languageId)
            ->orderBy('id', 'desc')
            ->get();

        $totalViews = ViewNow::whereNotNull('document_id')->count();
        $totalLikes = LikeNow::whereNotNull('document_id')->count();
        $totalShares = ShareNow::whereNotNull('document_id')->count();

        return view('home.document.index', compact('documents','totalViews', 'totalLikes','totalShares'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'title' => 'required|string|max:255',
            'level' => 'required|integer',
            'image_path' => 'nullable|image',
            'description' => 'nullable|string',
            'language' => 'required|string',
            'status' => 'required|boolean',
        ]);

        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            
            $originalName = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();
            
            $sanitizedFilename = str_replace(' ', '_', pathinfo($originalName, PATHINFO_FILENAME));
            $filename = time() . '_' . $sanitizedFilename . '.' . $extension;
            
            $image->move(public_path('assets/images'), $filename);

            $validatedData['image_path'] = 'assets/images/' . $filename;
        }

        documentHome::create($validatedData);

        return redirect()->back()->with('success', __('messages.Team saved successfully!'));
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

        $documents = documentHome::findOrFail($id);

        $documentList = documentHome::where('language', $languageId)
        ->orderBy('id', 'desc')
        ->limit(6)
        ->get();

        $totalViews = ViewNow::where('document_id', $id)->count();
        $totalShares = ShareNow::where('document_id', $id)->count();
        $totalLikes = LikeNow::where('document_id', $id)->count();

        ViewNow::create([
            'document_id' => $id,
            'view_count' => 1,
        ]);


        return view('home.document.showDocument', compact('documents', 'documentList','totalViews','totalLikes', 'totalShares'));
    }

    public function store_like(Request $request, $id)
    {
        $documents = documentHome::findOrFail($id);
        
        LikeNow::create([
            'document_id' => $documents->id,
            'view_count' => 1, 
        ]);

        return redirect()->route('documents.view', $documents->id)
                        ->with('success', 'Like added successfully!');
    }

    public function store_share(Request $request, $id)
    {
        $documents = documentHome::findOrFail($id);
        
        ShareNow::create([
            'document_id' => $documents->id,
            'view_count' => 1, 
        ]);

        return redirect()->route('documents.view', $documents->id)
                        ->with('success', 'Like added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $documents = documentHome::findOrFail($id);
        return response()->json($documents);
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
        $document = documentHome::find($id);
    
        $request->validate([
            'title' => 'required|string|max:255',
            'level' => 'required|integer',
            'language' => 'required|integer',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
        ]);
    
        $document->update([
            'title' => $request->title,
            'level' => $request->level,
            'language' => $request->language,
            'description' => $request->description,
            'status' => $request->status
        ]);
    
    
        return response()->json(['message' => 'Document updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
