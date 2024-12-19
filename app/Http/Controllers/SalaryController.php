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
        $salaries = Salary::with(['user'])
            ->where('user_id', Auth::id())
            ->orderBy('id', 'desc')
            ->paginate(10);
        
        foreach ($salaries as $item) {
            $startTime = Carbon::parse($item->start_time);
            $endTime = Carbon::parse($item->end_time);
            $totalHours = $endTime->diffInHours($startTime) - 1; 
            $item->working_hours = $totalHours;
        }

        $month1 = Salary::where('user_id', Auth::id())
        ->whereMonth('full_date', 1)
        ->whereYear('full_date', Carbon::now()->year) 
        ->count();  

        $month2 = Salary::where('user_id', Auth::id())
        ->whereMonth('full_date', 2)
        ->whereYear('full_date', Carbon::now()->year) 
        ->count(); 

        $month3 = Salary::where('user_id', Auth::id())
        ->whereMonth('full_date', 3)
        ->whereYear('full_date', Carbon::now()->year) 
        ->count();  

        $month4 = Salary::where('user_id', Auth::id())
        ->whereMonth('full_date', 4)
        ->whereYear('full_date', Carbon::now()->year) 
        ->count();  

        $month5 = Salary::where('user_id', Auth::id())
        ->whereMonth('full_date', 5)
        ->whereYear('full_date', Carbon::now()->year) 
        ->count(); 

        $month6 = Salary::where('user_id', Auth::id())
        ->whereMonth('full_date', 6)
        ->whereYear('full_date', Carbon::now()->year) 
        ->count(); 
        $month7 = Salary::where('user_id', Auth::id())
        ->whereMonth('full_date', 7)
        ->whereYear('full_date', Carbon::now()->year) 
        ->count(); 

        $month8 = Salary::where('user_id', Auth::id())
        ->whereMonth('full_date', 8)
        ->whereYear('full_date', Carbon::now()->year) 
        ->count();  
        
        $month9 = Salary::where('user_id', Auth::id())
        ->whereMonth('full_date', 9)
        ->whereYear('full_date', Carbon::now()->year) 
        ->count();  

        $month10 = Salary::where('user_id', Auth::id())
        ->whereMonth('full_date', 10)
        ->whereYear('full_date', Carbon::now()->year) 
        ->count(); 

        $month11 = Salary::where('user_id', Auth::id())
        ->whereMonth('full_date', 11)
        ->whereYear('full_date', Carbon::now()->year) 
        ->count(); 

        $month12 = Salary::where('user_id', Auth::id())
        ->whereMonth('full_date', 12)
        ->whereYear('full_date', Carbon::now()->year) 
        ->count();  

        return view('salary.index', compact('salaries','month1','month2','month3','month4','month5','month6','month7','month8','month9','month10','month11','month12'));
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
        ], [
            'user_id.required' => __('validation.user_id_required'),
            'user_id.exists' => __('validation.user_id_exists'),
            'name.required' => __('validation.name_required'),
            'name.string' => __('validation.name_string'),
            'name.max' => __('validation.name_max'),
            'date_create.required' => __('validation.date_create_required'),
            'date_create.date' => __('validation.date_create_date'),
            'current_time_start.required' => __('validation.current_time_start_required'),
            'current_time_start.date_format' => __('validation.current_time_start_format'),
            'current_time_end.required' => __('validation.current_time_end_required'),
            'current_time_end.date_format' => __('validation.current_time_end_format'),
        ]);
        

        Salary::create([
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
