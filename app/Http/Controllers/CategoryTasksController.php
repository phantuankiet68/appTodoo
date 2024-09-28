<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\CategoryTask;

class CategoryTasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $CategoryTask = CategoryTask::findOrFail($id);
        // Trả về dữ liệu dưới dạng JSON
        return response()->json($CategoryTask);
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
        // Validate dữ liệu từ request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|integer',
        ]);

        // Tìm đối tượng category_task theo ID
        $task = CategoryTask::findOrFail($id);

        // Cập nhật thông tin task
        $task->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'status' => $validatedData['status'],
        ]);

        // Chuyển hướng về trang danh sách với thông báo thành công
        return redirect()->route('todo.index')->with('success', 'Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // Tìm đối tượng CategoryTask theo ID và xóa
        $category_task = CategoryTask::findOrFail($id);

        // Xóa task
        $category_task->delete();
        // Chuyển hướng về trang danh sách với thông báo thành công
        return redirect()->route('todo.index')->with('success', 'Deleted successfully');
    }
}
