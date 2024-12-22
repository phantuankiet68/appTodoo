<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paragraph;
use App\Models\CategoryLanguage;
class ParagraphController extends Controller
{
     /**
     * Lưu dữ liệu được gửi từ form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'language_id' => 'required|integer',
            'category_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'required|image',
        ]);
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = uniqid() . '_' . hash('sha256', $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images'), $filename);
            $validatedData['image'] = 'assets/images/' . $filename;
        }
        Paragraph::create($validatedData);
    
        return redirect()->route('japanese.addJapanese')->with('success', 'Paragraph created successfully!');
    }    

    public function show($id)
    {
        $path_id = $id;
        $category = CategoryLanguage::get();
        $paragraph = Paragraph::with(['category'])->where('language_id', 3)->where('category_id', $id)->get();
        return view('showParagraph.index', compact('path_id','category','paragraph'));
    }
    
}
