<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        if (request()->getHost() && strpos(request()->getHost(), 'www.') === 0) {
            $nonWwwUrl = request()->getScheme() . '://' . substr(request()->getHost(), 4) . request()->getRequestUri();
            $nonWwwUrl = str_replace("https://www.", "https://", $nonWwwUrl);
            return redirect($nonWwwUrl);
            exit;
        }

        Schema::defaultStringLength(191);
        
 \URL::forceScheme('https');
    }
}
