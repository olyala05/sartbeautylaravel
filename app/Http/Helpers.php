<?php

function settings($key)
{
    // `config('settings')` fonksiyonu ayarları getirir ve dil (`lang`) filtresi uygular.
    $config = config('settings')->where('lang', app()->getLocale());

    // İlk değeri kontrol eder ve eğer varsa, 'name' alanı `$key` ile eşleşen ayarın `content` değerini döndürür.
    if ($config->where('name', $key)->first()) {
        return $config->where('name', $key)->first()['content'];
    }
}


function uniqRt($slug)
{
    // `config('routes')` fonksiyonu rotaları getirir ve dil (`lang`) filtresi uygular.
    $routes = config('routes');
    $route = $routes
        ->where('lang', app()->getLocale())
        ->where('uniq_slug', $slug)
        ->first();
 


    // Eğer rota mevcutsa, bu rotayı döndürür. Aksi halde `$slug` değerini döndürür.
    if ($route ?? false)
        return route('route', ['lang' => app()->getLocale(), 'route' => $route->slug]);
    else {
        // if(str_contains($slug, ['en/','tr/','ru/']))
        return $slug;
    }
}
