<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
class V1TaskController extends Controller
{
  
    public function index()
    {
        $tasks = Task::with('user')->get();
    
        $statusCounts = Task::selectRaw("status, COUNT(*) as count")
            ->whereIn('status', ['open', 'doing', 'testing', 'done'])
            ->groupBy('status')
            ->pluck('count', 'status');
    
        $statusCounts = array_merge([
            'open' => 0,
            'doing' => 0,
            'testing' => 0,
            'done' => 0
        ], $statusCounts->toArray());
    
        return view('pages.task.index', compact('tasks', 'statusCounts'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'current_start' => 'nullable|date',
            'status' => 'nullable|integer',
        ], [
            'user_id.required' => __('validation.user_id_required'),
            'user_id.exists' => __('validation.user_id_exists'),
            'name.required' => __('validation.name_required'),
            'name.string' => __('validation.name_string'),
            'name.max' => __('validation.name_max'),
            'description.nullable' => __('validation.description_nullable'),
            'current_start.date' => __('validation.current_start_date'),
            'status.integer' => __('validation.status_integer'),
        ]);
    
        try {
            Task::create($request->all());
            return redirect()->route('tasks.index')->with('success', __('messages.Task created successfully'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()]);
        }
    }

    
    public function show($id)
    {
        $tasks = Task::with(['user'])->findOrFail($id);
        return response()->json($tasks);
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'current_start' => 'nullable|date',
            'status' => 'nullable|integer',
        ]);

        $task = Task::findOrFail($id);
        $task->update($validatedData);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
    }

   
    public function destroy($id)
    {
        //
    }
}
