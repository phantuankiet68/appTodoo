<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator; 

class CategoryController extends Controller
{

    public function index(Request $request)
    {
        
    }
    /**
     * Store a newly created resource in storage.
     * @author Phan Tuấn Kiệt
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id', 
            'name' => 'required|string|max:255',
            'key' => 'required', 
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else{
            Category::create([
                'user_id' => $request->user_id,
                'name' => $request->name,
                'key' => $request->key,
                'status' => $request->status
            ]);
    
            return redirect()->back()->with('success_create', __('messages.Create_success'));
        }
    }

    /**
     * Display the specified resource.
     * @author Phan Tuấn Kiệt
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category);
    }

    /**
    * Update the specified resource in storage.
    * @author Phan Tuấn Kiệt
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id', 
            'name' => 'required|string|max:255',
            'key' => 'required', 
            'status' => 'required',
        ]);

        $category = Category::findOrFail($id);

        $category->update([
            'user_id' => $validatedData['user_id'],
            'name' => $validatedData['name'],
            'key' => $validatedData['key'],
            'status' => $validatedData['status'],
        ]);

        return redirect()->route('issue.index')->with('success', 'Task updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    * @author Phan Tuấn Kiệt
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('issue.index')->with('success', 'Deleted successfully');
    }
}
