<?php
if (! function_exists('short_string_description')) {
    function short_string_description($str) {
        $rest = \Illuminate\Support\Str::words($str, 20,'...');
        return $rest;
    }
}

if (! function_exists('short_service')) {
    function short_service($str) {
        $rest = \Illuminate\Support\Str::words($str, 45,'...');
        return $rest;
    }
}
