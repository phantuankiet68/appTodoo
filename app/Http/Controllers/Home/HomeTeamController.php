<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\teamHome;
use App\Models\View;
use App\Models\Like;
use App\Models\Share;

class HomeTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = teamHome::get();
        return view('admin.team.index', compact('teams'));
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
    
        $teams = teamHome::where('language', $languageId)
            ->orderBy('id', 'asc')
            ->get();


        return view('home.team.index', compact('teams'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'image_path' => 'nullable|image',
            'description' => 'nullable|string',
            'language' => 'required|string',
            'status' => 'required|boolean',
            'stt' => 'required|integer',
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

        teamHome::create($validatedData);

        return redirect()->back()->with('success', __('messages.Team saved successfully!'));
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
