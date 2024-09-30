<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use PDF;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentMonth = now()->month;
        $currentYear = now()->year;

        $expense = Expense::with(['user'])
            ->where('user_id', Auth::id())
            ->whereYear('current_date', $currentYear) 
            ->whereMonth('current_date', $currentMonth) 
            ->orderBy('id', 'asc')
            ->paginate(8);
        $totalRent = Expense::where('user_id', Auth::id())
            ->whereMonth('current_date', $currentMonth)
            ->whereYear('current_date', $currentYear)
            ->sum('rent');

        $totalEWallet = Expense::where('user_id', Auth::id())
            ->whereMonth('current_date', $currentMonth)
            ->whereYear('current_date', $currentYear)
            ->sum('e_wallet');

        $totalFoodExpense = Expense::where('user_id', Auth::id())
            ->whereMonth('current_date', $currentMonth)
            ->whereYear('current_date', $currentYear)
            ->selectRaw('SUM(breakfast + lunch + afternoon_meal + dinner + coffee) as total_food_expense')
            ->value('total_food_expense'); 

        $totalSports = Expense::where('user_id', Auth::id())
            ->whereMonth('current_date', $currentMonth)
            ->whereYear('current_date', $currentYear)
            ->sum('sports');

        $totalOtherExpenses = Expense::where('user_id', Auth::id())
            ->whereMonth('current_date', $currentMonth)
            ->whereYear('current_date', $currentYear)
            ->selectRaw('SUM(other_expenses + fuel) as total_other_expenses')
            ->value('total_other_expenses');

        $totalAllExpenses = $totalRent + $totalEWallet + $totalFoodExpense + $totalSports + $totalOtherExpenses;
        return view('expense.index', compact('expense','totalRent','totalEWallet', 'totalFoodExpense','totalSports','totalOtherExpenses', 'totalAllExpenses'));
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
            'current_date' => 'required|date',
            'breakfast' => 'required|numeric|min:0',
            'lunch' => 'required|numeric|min:0',
            'afternoon_meal' => 'required|numeric|min:0',
            'dinner' => 'required|numeric|min:0',
            'coffee' => 'required|numeric|min:0',
            'fuel' => 'required|numeric|min:0',
            'sports' => 'required|numeric|min:0',
            'e_wallet' => 'required|numeric|min:0',
            'other_shopping' => 'required|numeric|min:0',
            'other_expenses' => 'required|numeric|min:0',
            'rent' => 'required|numeric|min:0',
        ]);

        $totalSpending = $request->input('breakfast') + 
                    $request->input('lunch') + 
                    $request->input('afternoon_meal') + 
                    $request->input('dinner') + 
                    $request->input('coffee') + 
                    $request->input('fuel') + 
                    $request->input('sports') + 
                    $request->input('e_wallet') + 
                    $request->input('other_shopping') + 
                    $request->input('other_expenses') + 
                    $request->input('rent');
                    
        $formattedTotal = number_format($totalSpending, 0, ',', '.') . ' VND';
        Expense::create([
            'user_id' => $request->user_id,
            'current_date' => $request->current_date,
            'breakfast' => $request->breakfast,
            'lunch' => $request->lunch,
            'afternoon_meal' => $request->afternoon_meal,
            'dinner' => $request->dinner,
            'coffee' => $request->coffee,
            'fuel' => $request->fuel,
            'sports' => $request->sports,
            'e_wallet' => $request->e_wallet,
            'other_shopping' => $request->other_shopping,
            'other_expenses' => $request->other_expenses,
            'rent' => $request->rent,
            'total_spending_today' => $totalSpending,
        ]);

        \Log::info('Input values:', $request->all());
        \Log::info('Total spending calculated:', ['total' => $totalSpending]);
        return redirect()->back()->with('success', 'Chi tiêu đã được lưu thành công!');
    }


    public function exportPdf()
    {
        $currentMonth = now()->month;
        $currentYear = now()->year;

        // Lấy dữ liệu từ bảng expenses
        $expenses = Expense::whereMonth('current_date', $currentMonth)
                        ->whereYear('current_date', $currentYear)
                        ->get();

        // Kiểm tra định dạng ngày tháng
        foreach ($expenses as $expense) {
            // Chuyển đổi current_date thành đối tượng Carbon nếu nó là chuỗi
            $expense->current_date = Carbon::parse($expense->current_date);
        }

        // Tạo PDF từ dữ liệu
        $pdf = PDF::loadView('expense.pdf', compact('expenses'));

        // Trả về file PDF
        return $pdf->download('expense.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        //
    }
}
