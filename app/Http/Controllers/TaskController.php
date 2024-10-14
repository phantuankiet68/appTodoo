<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\CategoryTask;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
    * Display a listing of the resource.
    * @author Phan Tuấn Kiệt
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $tasks = Task::with(['category', 'user'])->where('user_id', Auth::id())->orderBy('id', 'asc')->paginate(2);
        $categoryTasks = CategoryTask::where('user_id', Auth::id())->paginate(12);
        return view('task.index', compact('categoryTasks','tasks'));
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
            'category_id' => 'required|exists:category_tasks,id', 
            'user_id' => 'required|exists:users,id', 
            'name' => 'required|string|max:255', 
            'description' => 'required|string', 
            'date_start' => 'required|date', 
            'date_end' => 'required|date', 
            'status' => 'required|integer', 
        ], [
            'category_id.required' => __('messages.category_id_required'),
            'user_id.required' => __('messages.user_id'),
            'name.required' => __('messages.name_required'),
            'description.required' => __('messages.description_required'),
            'date_start.required' => __('messages.date_start_required'),
            'date_end.required' => __('messages.date_end_required'),
            'status.required' => __('messages.status_required'),
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else{
            Task::create([
                'category_id' => $request->category_id,
                'user_id' => $request->user_id,
                'name' => $request->name,
                'description' => $request->description,
                'date_start' => $request->date_start,
                'date_end' => $request->date_end,
                'status' => $request->status,
            ]);
    
            return redirect()->route('tasks.index')->with('success', __('messages.Create_success'));
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
        $tasks = Task::findOrFail($id);
        return response()->json($tasks);
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
            'category_id' => 'required|exists:category_tasks,id', 
            'user_id' => 'required|exists:users,id', 
            'name' => 'required|string|max:255', 
            'description' => 'required|string', 
            'date_start' => 'required|date', 
            'date_end' => 'required|date', 
            'status' => 'required|integer', 
        ]);

        $task = Task::findOrFail($id);

        $task->update([
            'category_id' =>  $validatedData['category_id'],
            'user_id' => $validatedData['user_id'],
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'date_start' => $validatedData['date_start'],
            'date_end' => $validatedData['date_end'],
            'status' => $validatedData['status'],
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    * @author Phan Tuấn Kiệt
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $tasks = Task::findOrFail($id);
        $tasks->delete();
        return redirect()->route('tasks.index')->with('success', 'Deleted successfully');
    }
}
