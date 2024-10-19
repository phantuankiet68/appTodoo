<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Carbon\Carbon;
class WorkflowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::today(); 

        $workflows = Task::with('user')
            ->where('current_start', $today)
            ->get();
        return view('workflow.index',compact('workflows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(Request $request, $id)
    {
        $workflow = Task::findOrFail($id);
        $workflow->status = $request->input('status');
        $workflow->save();

        return response()->json(['success' => true]);
    }
}
