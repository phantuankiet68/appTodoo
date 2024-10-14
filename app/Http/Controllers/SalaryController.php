<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Salary;
use Carbon\Carbon; // Để xử lý thời gian

class SalaryController extends Controller
{
    /**
    * Display a listing of the resource.
    *  @author Phan Tuấn Kiệt
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $salary = Salary::with(['user'])
            ->where('user_id', Auth::id())
            ->orderBy('id', 'asc')
            ->paginate(2);
        
        foreach ($salary as $sala) {
            $startTime = Carbon::parse($sala->start_time);
            $endTime = Carbon::parse($sala->end_time);
        
            // Calculate the difference in hours, then subtract 1 hour
            $totalHours = $endTime->diffInHours($startTime) - 1; // Subtract 1 hour for break/lunch
        
            // Store the calculated hours in the $sala object to pass it to the view
            $sala->working_hours = $totalHours;
        }

        return view('salary.index', compact('salary'));
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
            'user_id' => 'required|exists:users,id', 
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date_create' => 'required|date',
            'current_time_start' => 'required|date_format:H:i',
            'current_time_end' => 'required|date_format:H:i',
            'total_working_time' => 'nullable|string',
            'total_overtime' => 'nullable|string',
        ]);

        $salary = Salary::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'description' => $request->description,
            'date_create' => $request->date_create,
            'current_time_start' => $request->current_time_start,
            'current_time_end' => $request->current_time_end,
            'total_working_time' => $request->total_working_time,
            'total_overtime' => $request->total_overtime,
        ]);

        return redirect()->route('salaries.index')->with('success', 'Issue created successfully');
    }

    private function calculateWorkingTime($startTime, $endTime)
    {
        $start = \Carbon\Carbon::createFromFormat('H:i', $startTime);
        $end = \Carbon\Carbon::createFromFormat('H:i', $endTime);
        $workingHours = $start->diffInMinutes($end);
        
        return floor($workingHours / 60) . ' giờ ' . ($workingHours % 60) . ' phút';
    }

    private function calculateOvertime($overtimeStart, $overtimeEnd)
    {
        $start = \Carbon\Carbon::createFromFormat('H:i', $overtimeStart);
        $end = \Carbon\Carbon::createFromFormat('H:i', $overtimeEnd);
        $overtimeMinutes = $start->diffInMinutes($end);
        
        return floor($overtimeMinutes / 60) . ' giờ ' . ($overtimeMinutes % 60) . ' phút';
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
