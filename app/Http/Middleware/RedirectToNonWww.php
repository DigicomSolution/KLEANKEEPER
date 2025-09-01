<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectToNonWww
{
    public function handle(Request $request, Closure $next)
    {
        if (strpos($request->getHost(), 'www.') === 0) {
            $nonWwwUrl = $request->getScheme() . '://' . substr($request->getHost(), 4) . $request->getRequestUri();
            return redirect($nonWwwUrl);
            // return redirect()->to($nonWwwUrl, 301);
        }

        return $next($request);
    }
}
