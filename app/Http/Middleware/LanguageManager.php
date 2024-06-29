<?php

namespace App\Http\Middleware;

use App\Models\Routes;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class LanguageManager
{
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }

        $routes= Cache::remember('routes', now()->addMonth(), function () {
            return Routes::where('is_active', 1)->get();
        });

        config(['routes' => $routes]);
        
        $settings = \App\Models\Settings::get();

        config(['settings' => $settings]);

        return $next($request);
    }
}
