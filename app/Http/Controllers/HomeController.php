<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\News;
use App\Models\teamHome;
use App\Models\ProjectHome;
use App\Models\documentHome;
use App\Models\interfaceHome;
use App\Models\wikiHome;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $locale = session('locale', 'en');
        
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
    
        $languageId = $languageMap[$locale] ?? 2;
    
        $news = News::where('language', $languageId)
            ->orderBy('stt', 'desc')
            ->limit(6)
            ->get();
        $projects = ProjectHome::where('language', $languageId)
            ->orderBy('stt', 'desc')
            ->limit(6)
            ->get();
        $teams = teamHome::where('language', $languageId)
            ->orderBy('stt', 'desc')
            ->limit(6)
            ->get();    

        $documents = documentHome::where('language', $languageId)
            ->orderBy('id', 'desc')
            ->limit(6)
            ->get();  

        $interfaces = interfaceHome::where('language', $languageId)
            ->orderBy('id', 'desc')
            ->limit(6)
            ->get();    
        $wikis = wikiHome::where('language', $languageId)
            ->orderBy('id', 'desc')
            ->limit(6)
            ->get();    

        return view('pages.home.index', compact('news', 'projects', 'teams','documents', 'interfaces','wikis'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($full_name)
    {
        $full_name = str_replace('-', ' ', $full_name);
        $user = User::where('full_name', $full_name)->firstOrFail();
        return view('profile', compact('user'));
    }

}
