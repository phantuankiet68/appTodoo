<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\News;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::get();
        return view('pages.home.index', compact('news'));
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
