<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        //compose all the views
        view()->composer('*', function ($view)
        {
            $getLocale = \Illuminate\Support\Facades\Session::get('localeVal');
            if ($getLocale==null){
                \Illuminate\Support\Facades\Session::put('localeVal', 'en');
            }

        });

    }



}
