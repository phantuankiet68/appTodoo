<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\News;
use App\Models\ProjectHome;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Lấy giá trị locale từ session (mặc định là 'en')
        $locale = session('locale', 'en');
        
        $languageMap = [
            'vi' => 1,
            'en' => 2,
            'ja' => 3,
        ];
    
        // Kiểm tra và gán giá trị languageId
        $languageId = $languageMap[$locale] ?? 2; // Mặc định là English
    
        $news = News::where('language', $languageId)
            ->orderBy('stt', 'asc')
            ->get();
        $projects = ProjectHome::where('language', $languageId)
            ->orderBy('stt', 'asc')
            ->get();
    
        return view('pages.home.index', compact('news', 'projects'));
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
