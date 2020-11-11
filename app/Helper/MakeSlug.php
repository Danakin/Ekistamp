<?php

use Illuminate\Support\Str;

if (!function_exists('make_slug')) {
    function make_slug($text)
    {
        return Str::slug(date('Ymd') . "-" . Str::limit($text, 55), '-');
    }
}
