<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('information.index');
    }
    public function uploadImage(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        $user = User::find($id);

        if (!$user) {
            return back()->with('error', 'User not found.');
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $originalName = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();
            $sanitizedFilename = str_replace(' ', '_', pathinfo($originalName, PATHINFO_FILENAME));
            $filename = time() . '_' . $sanitizedFilename . '.' . $extension;
            $image->move(public_path('assets/images'), $filename);
            $relativePath = 'assets/images/' . $filename;
            $user->update(['image' => $relativePath]);
            return back()->with('success', 'Image uploaded successfully!');
        }

        return back()->with('error', 'No image was uploaded.');
    }
}
