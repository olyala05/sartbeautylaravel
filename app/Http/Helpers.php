<?php

function settings($key)
{
    $config = config('settings')->where('lang', app()->getLocale());

    if ($config->where('name', $key)->first()) {
        return $config->where('name', $key)->first()['content'];
    }
}

function uniqRt($slug)
{
    $routes = config('routes');
    $route = $routes
    ->where('lang', app()->getLocale())
    ->where('uniq_slug', $slug)
    ->first();

    if($route ?? false)
        return route('route',['lang' => app()->getLocale(),'route' => $route->slug]);
    else
        return $slug;
}
