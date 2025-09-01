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
            
        }else {
            $nonWwwUrl = request()->getScheme() . '://' . request()->getHost() . request()->getRequestUri();
            $nonWwwUrl = str_replace("https://", "https://www.", $nonWwwUrl);
            $nonWwwUrl = str_replace("http://", "https://www.", $nonWwwUrl);
            return redirect($nonWwwUrl);
            exit;
        }

        Schema::defaultStringLength(191);
        
 \URL::forceScheme('https');
    }
}
