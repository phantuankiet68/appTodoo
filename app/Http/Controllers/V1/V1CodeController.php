<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class V1CodeController extends Controller
{
    public function index()
    {
        $locale = session('locale', 'en');

        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];

        $languageId = $languageMap[$locale] ?? 2;

        $blogs = Blog::where('language', $languageId)->orderBy('id', 'desc')->limit(6)->get();

        return view('pages.code.index', compact('blogs'));
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
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
