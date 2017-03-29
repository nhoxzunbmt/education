<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

if (!function_exists('set_active')) {
    function set_active($path, $active = 'active') {
        return call_user_func_array('Request::is', (array)$path) ? $active : '';
    }
}

if (!function_exists('format_date')) {
    function format_date($date)
    {
        return Carbon::parse($date)->format('d.m.Y H:i');
    }
}

if (!function_exists('format_number')) {
    function format_number($value)
    {
        if ($value)
        {
            return number_format($value);
        }
        return 0;
    }
}

if (!function_exists('curd')) {
    function curd($value)
    {
        if (!Auth::user()->isSuper() && $value != 1) {
            return 'disabled';
        } else if (Auth::user()->isSuper() && $value == 1) {
            return 'disabled';
        } else if (!Auth::user()->isSuper() && $value == 1) {
            return 'disabled';
        } else {
            return '';
        }
    }
}

if (!function_exists('is_super')) {
    function is_super()
    {
        if (!Auth::user()->isSuper()) {
            return 'disabled';
        }

        return '';
    }
}

if (!function_exists('type_price')) {
    function type_price($type)
    {
        if ($type == 1) {
            return '9';
        }

        return '8';
    }
}

if (!function_exists('his_time')) {
    function his_time($date)
    {
        return Carbon::parse($date)->format('H:i d.m.Y');
    }
}
