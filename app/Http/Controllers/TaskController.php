<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::with(['user'])->where('user_id', Auth::id())->orderBy('id', 'asc')->paginate(2);
        // $tasks = Task::with(['user'])
        // ->where('user_id', Auth::id())
        // ->whereDate('current_start', now()->format('Y-m-d')) 
        // ->orderBy('id', 'asc')
        // ->paginate(2);
        return view('task.index', compact('tasks'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
