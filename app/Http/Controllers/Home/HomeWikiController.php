<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\wikiHome;
use App\Models\ViewNow;
use App\Models\LikeNow;
use App\Models\ShareNow;

class HomeWikiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wikis = wikiHome::get();
        return view('admin.wiki.index', compact('wikis'));
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

        wikiHome::create($validatedData);

        return redirect()->back()->with('success', __('messages.Team saved successfully!'));
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
    
        $wikis = wikiHome::withCount(['views', 'likes','shares'])
            ->where('language', $languageId)
            ->orderBy('id', 'desc')
            ->get();

        $totalViews = ViewNow::whereNotNull('wiki_id')->count();
        $totalLikes = LikeNow::whereNotNull('wiki_id')->count();
        $totalShares = ShareNow::whereNotNull('wiki_id')->count();

        return view('home.wiki.index', compact('wikis','totalViews', 'totalLikes','totalShares'));
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $locale = session('locale', 'en');
        
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
    
        $languageId = $languageMap[$locale] ?? 2;

        $wikis = wikiHome::findOrFail($id);

        $wikiList = wikiHome::where('language', $languageId)
        ->orderBy('id', 'desc')
        ->limit(6)
        ->get();

        $totalViews = ViewNow::where('wiki_id', $id)->count();
        $totalShares = ShareNow::where('wiki_id', $id)->count();
        $totalLikes = LikeNow::where('wiki_id', $id)->count();

        ViewNow::create([
            'wiki_id' => $id,
            'view_count' => 1,
        ]);


        return view('home.wiki.showWiki', compact('wikis', 'wikiList','totalViews','totalLikes', 'totalShares'));
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
        //
    }
}
