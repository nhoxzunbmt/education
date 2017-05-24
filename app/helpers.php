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
        if ($date) {
            return Carbon::parse($date)->format('d.m.Y');
        }
        
        return 'N/A';
    }
}

if (!function_exists('salary')) {
    function salary($value)
    {
        if ($value)
        {
            return number_format($value).' đ/buổi';
        }

        return number_format(200000).' đ/buổi';
    }
}

if (!function_exists('join_arr')) {
    function join_arr($arr)
    {
        $count_arr = count($arr);
        $list = '';

        if ($count_arr == 1) {
            foreach ($arr as $value) {
                $list = $value.'.';
            }
        } else {
            foreach ($arr as $key => $value) {
                if ($key == count($arr) - 1) {
                    $list .= $value.'.';
                } else {
                    $list .= $value. ', ';
                }
            }
        }

        return $list;
    }
}

if (!function_exists('current_year')) {
    function current_year()
    {
        return Carbon::now()->year;
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

if (!function_exists('is_profile')) {
    function is_profile($role)
    {
        if ($role == 4) {
            return 'Gia sư';
        }

        return 'Phụ huynh';
    }
}

if (!function_exists('gender')) {
    function gender($gender)
    {
        if ($gender == 1) {
            return 'Nam';
        } else if ($gender == 2) {
            return 'Nữ';
        }

        return 'N/A';
    }
}

if (!function_exists('image_teacher')) {
    function image_teacher($img)
    {
        if (isset($img) && $img) {
            return $img;
        }

        return 'default.jpg';
    }
}
