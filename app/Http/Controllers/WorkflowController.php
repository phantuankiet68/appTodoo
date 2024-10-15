<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workflow;

class WorkflowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workflows = Workflow::with('user')->get();
        return view('workflow.index',compact('workflows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(Request $request, $id)
    {
        $workflow = Workflow::findOrFail($id);
        $workflow->status = $request->input('status');
        $workflow->save();

        return response()->json(['success' => true]);
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
            'status' => 'required|in:open,doing,testing,done',
        ]);

        Workflow::create($request->all());

        return redirect()->route('workflows.index')->with('success', 'Workflow created successfully.');
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
