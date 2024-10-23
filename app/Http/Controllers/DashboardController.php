<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use App\Models\Vocabulary;
use App\Models\Component;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $sum_user = User::count();
        $percentage = ($sum_user / 200) * 100;
        $subtraction_user = (200 - $sum_user);

        $sum_task = Task::count();
        $percentage_task = ($sum_task / 200) * 100;
        $subtraction_task = (200 - $sum_task);

        $sum_japanese = Vocabulary::where('language_id', 3)->count();
        $percentage_japanese = ($sum_japanese / 200) * 100;
        $subtraction_japanese = (200 - $sum_japanese);

        $sum_english = Vocabulary::where('language_id', 2)->count();
        $percentage_english = ($sum_english / 200) * 100;
        $subtraction_english = (200 - $sum_english);

        $sum_component = Component::count();
        $percentage_component = ($sum_component / 200) * 100;
        $subtraction_component = (200 - $sum_component);
        
        return view('dashboard.index',compact('user','sum_user','sum_task','sum_japanese','sum_english','sum_component','percentage','subtraction_user','percentage_task','subtraction_task','percentage_japanese','subtraction_japanese','percentage_english','subtraction_english','percentage_component','subtraction_component',));
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
