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
        // Validate dữ liệu
        $validatedData = $request->validate([
            'language_id' => 'required|integer',
            'category_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Lưu hình ảnh nếu có
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public/assets');
            $validatedData['image'] = $imagePath;
        }

        // Tạo paragraph mới
        Paragraph::create($validatedData);

        return redirect()->back()->with('success', 'Quiz created updated successfully!');
    }
}
