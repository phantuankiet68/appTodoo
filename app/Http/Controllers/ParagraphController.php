<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paragraph;
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = uniqid() . '_' . hash('sha256', $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images'), $filename);
            $validatedData['image'] = 'assets/images/' . $filename;
        }
        Paragraph::create($validatedData);
    
        return redirect()->route('japanese.addJapanese')
            ->with('success', 'Paragraph created successfully!');
    }    
    
}
