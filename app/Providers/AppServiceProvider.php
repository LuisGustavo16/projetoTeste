<?php

namespace App\Providers;

<<<<<<< HEAD
=======
use Illuminate\Routing\UrlGenerator;
>>>>>>> 547c916 (a)
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
<<<<<<< HEAD
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
=======
    // ...

    public function boot(UrlGenerator $url)
    {
        if (env('APP_ENV') == 'production') {
            $url->forceScheme('https');
        }
>>>>>>> 547c916 (a)
    }
}
