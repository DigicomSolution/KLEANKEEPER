<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;
use Jenssegers\Agent\Agent;
use View;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Register the application's response macros.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('ress', function($viewname, $data=[]){
            $agent = new Agent();
            if ($agent->isMobile()) {
                return View::make('mobile.' . $viewname, $data);
            } else {
                return View::make('web.' . $viewname, $data);
            }
        });
    }
}