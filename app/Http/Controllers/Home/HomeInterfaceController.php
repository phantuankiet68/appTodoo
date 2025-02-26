<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\interfaceHome;
use App\Models\ViewNow;
use App\Models\LikeNow;
use App\Models\ShareNow;

class HomeInterfaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interfaces = interfaceHome::get();
        return view('admin.interface.index', compact('interfaces'));
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
    
        $interfaces = InterfaceHome::withCount(['views', 'likes','shares'])
            ->where('language', $languageId)
            ->orderBy('id', 'desc')
            ->get();

        $totalViews = ViewNow::whereNotNull('interface_id')->count();
        $totalLikes = LikeNow::whereNotNull('interface_id')->count();
        $totalShares = ShareNow::whereNotNull('interface_id')->count();

        return view('home.interface.index', compact('interfaces','totalViews', 'totalLikes','totalShares'));
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

        interfaceHome::create($validatedData);

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
        $interfaces = interfaceHome::findOrFail($id);
        return response()->json($interfaces);
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

        $interfaces = interfaceHome::findOrFail($id);

        $interfaceList = interfaceHome::where('language', $languageId)
        ->orderBy('id', 'desc')
        ->limit(6)
        ->get();

        $totalViews = ViewNow::where('interface_id', $id)->count();
        $totalShares = ShareNow::where('interface_id', $id)->count();
        $totalLikes = LikeNow::where('interface_id', $id)->count();

        ViewNow::create([
            'interface_id' => $id,
            'view_count' => 1,
        ]);


        return view('home.interface.showInterface', compact('interfaces', 'interfaceList','totalViews','totalLikes', 'totalShares'));
    }

    public function store_like(Request $request, $id)
    {
        $interface = InterfaceHome::findOrFail($id);
        
        LikeNow::create([
            'interface_id' => $interface->id,
            'view_count' => 1, 
        ]);

        return redirect()->route('new_experience.view', $interface->id)
                        ->with('success', 'Like added successfully!');
    }

    public function store_share(Request $request, $id)
    {
        $interface = InterfaceHome::findOrFail($id);
        
        ShareNow::create([
            'interface_id' => $interface->id,
            'view_count' => 1, 
        ]);

        return redirect()->route('new_experience.view', $interface->id)
                        ->with('success', 'Like added successfully!');
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
        $interface = interfaceHome::findOrFail($id);
    
        $interface->title = $request->input('title');
        $interface->language = $request->input('language');
        $interface->description = $request->input('description');
        $interface->status = $request->input('status');
    
        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $interface->image_path = $imageName;
        }
    
        $interface->save();
    
        return redirect()->to('/v2/interfaces')->with('success', 'Update successfully!');
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
