<?php

use Efriandika\LaravelSettings\Facades\Settings;

if (!function_exists('settings'))
{
    /**
     * @param $key
     * @param null $default
     * @return mixed|\Efriandika\LaravelSettings\Facades\Settings
     */
    function settings($key, $default = null)
    {
        return Settings::get($key, $default);
    }

    function settings_set($key, $default)
    {
        return Settings::set($key, $default);
    }

}