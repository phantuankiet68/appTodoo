<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\CategoryTask;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
    * Display a listing of the resource.
    * @author Phan Tuấn Kiệt
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $todos = Todo::with(['categoryTodo', 'userTodo'])->where('user_id', Auth::id())->orderBy('id', 'asc')->paginate(2);
        $categoryTasks = CategoryTask::where('user_id', Auth::id())->paginate(12);
        return view('todo.index', compact('categoryTasks','todos'));
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
            Todo::create([
                'category_id' => $request->category_id,
                'user_id' => $request->user_id,
                'name' => $request->name,
                'description' => $request->description,
                'date_start' => $request->date_start,
                'date_end' => $request->date_end,
                'status' => $request->status,
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
        $todos = Todo::findOrFail($id);
        return response()->json($todos);
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

        $task = Todo::findOrFail($id);

        $task->update([
            'category_id' =>  $validatedData['category_id'],
            'user_id' => $validatedData['user_id'],
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'date_start' => $validatedData['date_start'],
            'date_end' => $validatedData['date_end'],
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
        $todos = Todo::findOrFail($id);
        $todos->delete();
        return redirect()->route('todo.index')->with('success', 'Deleted successfully');
    }


}
