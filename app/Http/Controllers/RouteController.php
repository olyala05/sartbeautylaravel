<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use App\Models\Routes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class RouteController extends Controller
{
    public function index($lang,$route = null)
    {
        $route = $route ?? '/';
        if(in_array($lang,config('app.langs'))){
            App::setLocale($lang);
        }else{
            App::setLocale(config('app.fallback_locale'));
        }


        $route = Routes::where('slug', $route)
        ->where('lang',$lang)
        ->first();

        if ($route) {
            $page = Pages::where("route_id", $route->id)->first();

            return view('pages.default', ['route' => $route, 'page' => $page]);
        } else {
            return view('pages.404');
        }
    }

    public function show404()
    {
        return view('pages.404');
    }
}
