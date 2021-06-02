<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

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
        $locale = config('locales.fallback_locale');
        App::setLocale($locale);
        Lang::setLocale($locale);
        Session::put('locale', $locale);
        //Carbon::setlocale($locale);
    }
}
