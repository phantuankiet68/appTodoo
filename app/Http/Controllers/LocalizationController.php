<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class LocalizationController extends Controller
{
    /**
     * @param $locale
     * @return RedirectResponse
     */
    public function index($locale)
    {
        if (in_array($locale, ['vi', 'en', 'ja'])) {
            App::setLocale($locale);
            session()->put('locale', $locale);
        } else {
            App::setLocale('vi');
            session()->put('locale', 'vi');
        }
    
        return redirect()->back();
    }

}
