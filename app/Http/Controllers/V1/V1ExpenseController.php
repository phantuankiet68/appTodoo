<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
class V1ExpenseController extends Controller
{
  
    public function index()
    {
        $expenses = Expense::get();
        return view('pages.expense.index', compact('expenses'));
    }


   
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'money' => 'required|numeric|min:1',
            'choose' => 'required|in:1,2,3,4,5,6',
            'current_date' => 'required|date',
        ], [
            'user_id.required' => __('validation.user_id_required'),
            'user_id.exists' => __('validation.user_id_exists'),
            'title.required' => __('validation.title_required'),
            'money.required' => __('validation.money_required'),
            'money.numeric' => __('validation.money_numeric'),
            'money.min' => __('validation.money_min'),
            'choose.required' => __('validation.choose_required'),
            'choose.in' => __('validation.choose_in'),
            'current_date.required' => __('validation.date_required'),
            'current_date.date' => __('validation.date_date'),
        ]);

        Expense::create([
            'user_id'=> $request->user_id,
            'title' => $request->title,
            'money' => $request->money,
            'choose' => $request->choose,
            'current_date' => $request->current_date,
        ]);

        return redirect()->back()->with('success', __('messages.Expense added successfully!'));
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
