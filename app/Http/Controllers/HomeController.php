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
use App\Models\Blog;


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

        $news = News::where('language', $languageId)->orderBy('id', 'desc')->limit(6)->get();
        $projects = ProjectHome::where('language', $languageId)->orderBy('id', 'desc')->limit(6)->get();
        $teams = teamHome::where('language', $languageId)->orderBy('id', 'desc')->limit(6)->get();
        $documents = documentHome::where('language', $languageId)->orderBy('id', 'desc')->limit(8)->get();
        $interfaces = interfaceHome::where('language', $languageId)->orderBy('id', 'desc')->limit(6)->get();
        $wikis = wikiHome::where('language', $languageId)->orderBy('id', 'desc')->limit(6)->get();
        $blogs = Blog::where('language', $languageId)->orderBy('id', 'desc')->limit(6)->get();

        // Tạo meta tự động dựa trên nội dung
        $metaTitle = "TriSkill - Cộng đồng chia sẻ kiến thức lập trình, tiếng Anh và tiếng Nhật";
        $metaDescription = "Khám phá phương pháp học tiếng Nhật hiệu quả, lập trình hiện đại và rèn luyện tiếng Anh theo phong cách chuyên nghiệp.";

        if ($blogs->count() > 0) {
            $metaTitle = $blogs->first()->title ?? $metaTitle;
            $metaDescription = substr(strip_tags($blogs->first()->content), 0, 160) ?? $metaDescription;
        }

        return view('home.index', compact('blogs', 'news', 'projects', 'teams', 'documents', 'interfaces', 'wikis', 'metaTitle', 'metaDescription'));
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
