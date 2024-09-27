<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\CategoryTask;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryTasks = CategoryTask::paginate(12);
        return view('todo.index', compact('categoryTasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'category_id' => 'required|exists:categories,id', 
            'user_id' => 'required|exists:users,id', 
            'name' => 'required|string|max:255', 
            'description' => 'nullable|string', 
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
