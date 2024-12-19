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
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
    
            $user = User::find($id);
    
            if (!$user) {
                return response()->json(['error' => 'User not found.'], 404);
            }
    
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $originalName = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $sanitizedFilename = str_replace(' ', '_', pathinfo($originalName, PATHINFO_FILENAME));
                $filename = time() . '_' . $sanitizedFilename . '.' . $extension;
                $image->move(public_path('assets/images'), $filename);
    
                $relativePath = 'assets/images/' . $filename;
                $user->image = $relativePath; // Update image name
                $user->save();
    
                return response()->json(['success' => 'Image uploaded successfully!']);
            }
    
            return response()->json(['error' => 'No image was uploaded.'], 400);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while uploading the image.'], 500);
        }
    }

}
