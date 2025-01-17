<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\News;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $locale = session('locale', 'en');
            $languageMap = [
                'vi' => 1,
                'en' => 2,
                'ja' => 3,
            ];
            $languageId = $languageMap[$locale] ?? 2;
    
            $totalNews = News::where('language', $languageId)->count();
            $view->with('totalNews', $totalNews);
        });
    }
}
