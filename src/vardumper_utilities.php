<?php

use pdeans\Utilities\VarDumper;

if (!function_exists('dp')) {
    /**
     * Print variable or value with optional label.
     */
    function dp(mixed $data, string $label = '')
    {
        VarDumper::dp($data, $label);
    }
}

if (!function_exists('dpx')) {
    /**
     * Print string with all applicable characters converted to HTML entities.
     */
    function dpx(string $data, string $label = '')
    {
        VarDumper::dpx($data, $label);
    }
}

if (!function_exists('vd')) {
    /**
     * Pretty var dumper with optional label.
     */
    function vd(mixed $data, string $label = '')
    {
        VarDumper::vd($data, $label);
    }
}
