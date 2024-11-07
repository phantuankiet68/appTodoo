<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostImage;
use App\Models\PostComment;
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



class ChatController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $posts = Post::with(['user', 'images', 'comments', 'likes'])
        ->whereHas('images', function($query) {
            $query->select('id', 'post_id');
        })  
        ->withCount('comments')
        ->withCount('likes')
        ->orderBy('comments_count', 'asc')
        ->orderBy('id', 'asc')
        ->get();

        return view('chat.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexInfo()
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
        return view('chat.info.index', compact('profiles','languages','skills','educations','futures','projects','experiences','hobbies','objectives'));
    }


    public function storeProfileLanguage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'languages' => 'required|array',
            'languages.*' => 'required|string|max:255',
        ], [
            'user_id.required' => __('messages.user_id'),
            'languages.required' => __('messages.languages_required'),
            'languages.*.required' => __('messages.name_required'),
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        foreach ($request->languages as $language) {
            ProfileLanguages::create([
                'user_id' => $request->user_id,
                'name' => $language,
            ]);
        }
    
        return redirect()->back()->with('success_create', __('messages.You have successfully created new languages!'));
    }

    public function storeProfessionalSkills(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'skills' => 'required|array',
            'skills.*' => 'required|string|max:255',
        ], [
            'user_id.required' => __('messages.user_id'),
            'skills.required' => __('messages.languages_required'),
            'skills.*.required' => __('messages.name_required'),
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        foreach ($request->skills as $skill) {
            ProfessionalSkills::create([
                'user_id' => $request->user_id,
                'name' => $skill,
            ]);
        }
    
        return redirect()->back()->with('success_create', __('messages.You have successfully created new languages!'));
    }

    public function updateLanguageProfile(Request $request, $id)
    {
        $language = ProfileLanguages::findOrFail($id);

        $language->name = $request->input('name');
        $language->save();

        return redirect()->back()->with('success', 'Language updated successfully.');
    }


    public function updateSkillProfile(Request $request, $id)
    {
        $language = ProfessionalSkills::findOrFail($id);

        $language->name = $request->input('name');
        $language->save();

        return redirect()->back()->with('success', 'Language updated successfully.');
    }

    public function storeProfileEducation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'educations' => 'required|array',
            'educations.*' => 'required|string|max:255',
        ], [
            'user_id.required' => __('messages.user_id'),
            'educations.required' => __('messages.educations_required'),
            'educations.*.required' => __('messages.description_required'),
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        foreach ($request->educations as $education) {
            ProfessionalEducation::create([
                'user_id' => $request->user_id,
                'description' => $education,
            ]);
        }
    
        return redirect()->back()->with('success_create', __('messages.You have successfully created new languages!'));
    }

    public function updateEducationProfile(Request $request, $id)
    {
        $educations = ProfessionalEducation::findOrFail($id);

        $educations->description = $request->input('description');
        
        $educations->save();

        return redirect()->back()->with('success', 'Education updated successfully.');
    }

    public function updateProfile(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'user_id' => 'required|exists:users,id',
                'name' => 'required|string|max:255',
                'current_start' => 'nullable|date',
                'status' => 'nullable|integer',
                'email' => 'required|string|max:255',
                'phone' => 'required',
                'date_of_birth' => 'nullable|date',
                'link_facebook' => 'required|string|max:255',
                'link_instagram' => 'required|string|max:255',
                'link_linkin' => 'required|string|max:255',
                'link_link' => 'required|string|max:255',
                'address' =>'required|string|max:255',
                'description' => 'required|string',
            ]);

            $profiles = Profile::findOrFail($id);
            $profiles->update($validatedData);

            return response()->json(['message' => 'Profile updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while updating the profile.'], 500);
        }
    }

    public function storeProfileObjective(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'objectives' => 'required|array',
            'objectives.*' => 'required|string|max:255',
        ], [
            'user_id.required' => __('messages.user_id'),
            'objectives.required' => __('messages.description_required'),
            'objectives.*.required' => __('messages.description_required'),
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        foreach ($request->objectives as $item) {
            ProfileObjective::create([
                'user_id' => $request->user_id,
                'description' => $item,
            ]);
        }
    
        return redirect()->back()->with('success_create', __('messages.You have successfully created new languages!'));
    }

    public function updateProfileObjective(Request $request, $id)
    {
        $educations = ProfileObjective::findOrFail($id);

        $educations->description = $request->input('description');
        
        $educations->save();

        return redirect()->back()->with('success', 'Education updated successfully.');
    }
    public function storeProfileHobbies(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'hobbies' => 'required|array',
            'hobbies.*' => 'required|string|max:255',
        ], [
            'user_id.required' => __('messages.user_id'),
            'hobbies.required' => __('messages.description_required'),
            'hobbies.*.required' => __('messages.description_required'),
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        foreach ($request->hobbies as $item) {
            ProfileHobbies::create([
                'user_id' => $request->user_id,
                'description' => $item,
            ]);
        }
    
        return redirect()->back()->with('success_create', __('messages.You have successfully created new languages!'));
    }

    public function updateProfileHobbies(Request $request, $id)
    {
        $educations = ProfileHobbies::findOrFail($id);

        $educations->description = $request->input('description');
        
        $educations->save();

        return redirect()->back()->with('success', 'Education updated successfully.');
    }

    public function storeProfileExperience(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'experiences' => 'required|array',
            'experiences.*' => 'required|string|max:255',
        ], [
            'user_id.required' => __('messages.user_id'),
            'experiences.required' => __('messages.description_required'),
            'experiences.*.required' => __('messages.description_required'),
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        foreach ($request->projects as $item) {
            ProfileExperience::create([
                'user_id' => $request->user_id,
                'description' => $item,
            ]);
        }
    
        return redirect()->back()->with('success_create', __('messages.You have successfully created new languages!'));
    }

    public function updateProfileExperience(Request $request, $id)
    {
        $educations = ProfileExperience::findOrFail($id);

        $educations->description = $request->input('description');
        
        $educations->save();

        return redirect()->back()->with('success', 'Education updated successfully.');
    }

    public function storeProfileProject(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'projects' => 'required|array',
            'projects.*' => 'required|string|max:255',
        ], [
            'user_id.required' => __('messages.user_id'),
            'projects.required' => __('messages.description_required'),
            'projects.*.required' => __('messages.description_required'),
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        foreach ($request->projects as $item) {
            ProfileProject::create([
                'user_id' => $request->user_id,
                'description' => $item,
            ]);
        }
    
        return redirect()->back()->with('success_create', __('messages.You have successfully created new languages!'));
    }

    public function updateProfileProject(Request $request, $id)
    {
        $educations = ProfileProject::findOrFail($id);

        $educations->description = $request->input('description');
        
        $educations->save();

        return redirect()->back()->with('success', 'Education updated successfully.');
    }

    public function storeFutureDirection(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please log in to create future directions.');
        }
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'futures' => 'required|array',
            'futures.*' => 'required|string|max:255',
        ], [
            'user_id.required' => __('messages.user_id'),
            'futures.required' => __('messages.description_required'),
            'futures.*.required' => __('messages.description_required'),
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        foreach ($request->futures as $future) {
            FutureDirection::create([
                'user_id' => $request->user_id,
                'description' => $future,
            ]);
        }
    
        return redirect()->back()->with('success_create', __('messages.You have successfully created new languages!'));
    }

    public function updateFutureDirection(Request $request, $id)
    {
        $educations = FutureDirection::findOrFail($id);

        $educations->description = $request->input('description');
        
        $educations->save();

        return redirect()->back()->with('success', 'Education updated successfully.');
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
