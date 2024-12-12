<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\ProfileLanguages;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator; 
use App\Models\ProfessionalSkills;
use App\Models\ProfessionalEducation;
use App\Models\FutureDirection;
use App\Models\ProfileProject;
use App\Models\ProfileExperience;
use App\Models\ProfileHobbies;
use App\Models\ProfileObjective;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::where('user_id', Auth::id())->get();
        $languages = ProfileLanguages::where('user_id', Auth::id())->get();
        $skills = ProfessionalSkills::where('user_id', Auth::id())->get();
        $educations = ProfessionalEducation::where('user_id', Auth::id())->get();
        $futures = FutureDirection::where('user_id', Auth::id())->get();
        $projects = ProfileProject::where('user_id', Auth::id())->get();
        $experiences = ProfileExperience::where('user_id', Auth::id())->get();
        $hobbies = ProfileHobbies::where('user_id', Auth::id())->get();
        $objectives = ProfileObjective::where('user_id', Auth::id())->get();
        return view('profile.index',compact('profiles','languages', 'skills', 'educations', 'futures', 'projects', 'experiences', 'hobbies', 'objectives'));
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
