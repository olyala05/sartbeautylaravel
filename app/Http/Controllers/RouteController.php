<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use App\Models\Routes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class RouteController extends Controller
{
    public function index($route)
    {
        $route = Routes::where('slug', $route)->first();

        App::setLocale($route->lang ?? App::getLocale());
        
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
