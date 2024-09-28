<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\CategoryTask;

class CategoryTasksController extends Controller
{

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
            'description' => 'required|string|max:255', 
            'status' => 'required',
        ], [
            'user_id.required' => __('messages.user_id_required'),
            'name.required' => __('messages.name_required'),
            'description.required' => __('messages.description_required'),
            'status.required' => __('messages.status_required'),
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else{
            CategoryTask::create([
                'user_id' => $request->user_id,
                'name' => $request->name,
                'description' => $request->description,
                'status' => $request->status
            ]);
    
            return redirect()->route('todo.index')->with('success', __('messages.Create_success'));
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
        $CategoryTask = CategoryTask::findOrFail($id);
        return response()->json($CategoryTask);
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
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|integer',
        ]);

        $task = CategoryTask::findOrFail($id);

        $task->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'status' => $validatedData['status'],
        ]);

        return redirect()->route('todo.index')->with('success', 'Task updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    * @author Phan Tuấn Kiệt
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $category_task = CategoryTask::findOrFail($id);
        $category_task->delete();
        return redirect()->route('todo.index')->with('success', 'Deleted successfully');
    }
}
