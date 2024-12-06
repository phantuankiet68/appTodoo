<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator; 
use App\Models\Task;
use App\Models\Setting;
use App\Models\Component;
use App\Models\Expense;
use App\Models\Issue;
use App\Models\Event;
use App\Models\Post;
use App\Models\LearnMore;
use App\Models\Idea;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ideas = Idea::with(['user'])->get();
        
        $user = Auth::user();
        $sum_user = User::count();
        $percentage = ($sum_user / 200) * 100;
        $subtraction_user = (200 - $sum_user);

        $sum_issue = Issue::count();
        $percentage_issue = ($sum_issue / 200) * 100;
        $subtraction_issue = (200 - $sum_issue);

        $sum_task = Task::count();
        $percentage_task = ($sum_task / 200) * 100;
        $subtraction_task = (200 - $sum_task);

        $sum_event = Event::count();
        $percentage_event = ($sum_event / 200) * 100;
        $subtraction_event = (200 - $sum_event);

        $sum_post = Post::count();
        $percentage_post = ($sum_post / 200) * 100;
        $subtraction_post = (200 - $sum_post);

        $sum_japanese = LearnMore::where('language_id', 3)->count();
        $percentage_japanese = ($sum_japanese / 200) * 100;
        $subtraction_japanese = (200 - $sum_japanese);

        $sum_english = LearnMore::where('language_id', 2)->count();
        $percentage_english = ($sum_english / 200) * 100;
        $subtraction_english = (200 - $sum_english);

        $sum_component = Component::count();
        $percentage_component = ($sum_component / 200) * 100;
        $subtraction_component = (200 - $sum_component);
        
        return view('dashboard.index',compact('ideas','user','sum_user','sum_post','percentage_post','subtraction_post','sum_event','percentage_event','subtraction_event','percentage_issue','subtraction_issue','sum_issue','sum_task','sum_japanese','sum_english','sum_component','percentage','subtraction_user','percentage_task','subtraction_task','percentage_japanese','subtraction_japanese','percentage_english','subtraction_english','percentage_component','subtraction_component',));
    }

    public function getMonthlyCosts()
    {
        $currentYear = now()->year;
        $monthlyCosts = Expense::selectRaw('MONTH(created_at) as month, SUM(total_spending_today) as total_monthly_spending')
            ->where('user_id', Auth::id())
            ->whereYear('created_at', $currentYear)
            ->groupByRaw('MONTH(created_at)')
            ->orderBy('month')
            ->get();

        $formattedMonthlyCosts = [];
        for ($i = 1; $i <= 12; $i++) {
            $monthData = $monthlyCosts->firstWhere('month', $i);
            if ($monthData) {
                $formattedMonthlyCosts[] = [
                    'month' => $i,
                    'totalSpending' => (float) $monthData->total_monthly_spending,
                ];
            } else {
                $formattedMonthlyCosts[] = [
                    'month' => $i,
                    'totalSpending' => 0,
                ];
            }
        }
    
        return response()->json($formattedMonthlyCosts);
    }
    
    public function createIdea(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id', 
            'comment' => 'required|string|max:255',
        ],[
            'user_id.required' => __('messages.user_id'),
            'comment.required' => __('messages.name_required'),
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else{
            Idea::create([
                'user_id' => $request->user_id,
                'comment' => $request->comment,
            ]);
    
            return redirect()->back()->with('success', __('messages.You have successfully created a new category!'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
