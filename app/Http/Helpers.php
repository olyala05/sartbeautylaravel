<?php

function settings($key){
    $config = config('settings')->where('lang',app()->getLocale());

    if($config->where('name',$key)->first()){
        return $config->where('name',$key)->first()['content'];
    }
}



