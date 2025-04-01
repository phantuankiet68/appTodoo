<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeProduct;
class HomeProductController extends Controller
{
    public function index()
    {
        $products = HomeProduct::get();
        return view('admin.product.index', compact('products'));
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
    
        $products = HomeProduct::where('language', $languageId)
            ->orderBy('id', 'desc')
            ->get();


        return view('home.product.index', compact('products'));
    }

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

        HomeProduct::create($validatedData);

        return redirect()->back()->with('success', __('messages.Team saved successfully!'));
    }

    public function show($slug)
    {
        $locale = session('locale', 'en');
        
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
    
        $languageId = $languageMap[$locale] ?? 2;

        $productList = HomeProduct::where('language', $languageId)
        ->orderBy('id', 'desc')
        ->limit(6)
        ->get();

        $product = HomeProduct::where('slug', $slug)->firstOrFail();
        return view('home.product.show', compact('product', 'productList'));
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
