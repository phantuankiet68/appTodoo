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
        $userId = Auth::id(); // Lấy user_id từ người dùng hiện tại

        foreach ($request->all() as $key => $value) {
            if (preg_match('/day(\d+)_data/', $key, $matches)) {
                $day = $matches[1]; // Lấy số ngày từ key
    
                // Tạo ngày tháng năm từ ngày, tháng hiện tại
                $month = date('m'); // Tháng hiện tại
                $year = date('Y'); // Năm hiện tại
    
                // Tạo đối tượng Carbon từ ngày hiện tại và format theo `Y-m-d`
                $fullDate = Carbon::create($year, $month, $day)->format('Y-m-d');
    
                // Kiểm tra nếu dữ liệu nhập vào không rỗng
                $startTime = $request->input("day{$day}_start_time");
                $endTime = $request->input("day{$day}_end_time");
    
                if (empty($value) || empty($startTime) || empty($endTime)) {
                    return redirect()->back()->withErrors("Dữ liệu cho ngày {$day} không được để trống.");
                }
    
                // Lưu thông tin vào cơ sở dữ liệu
                Salary::create([
                    'day' => $day,
                    'data' => $value,
                    'start_time' => $startTime,
                    'end_time' => $endTime,
                    'user_id' => $userId,
                    'full_date' => $fullDate, // Lưu ngày theo định dạng `Y-m-d`
                ]);
            }
        }
    
        return redirect()->back()->with('success', 'Dữ liệu đã được lưu thành công!');
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
