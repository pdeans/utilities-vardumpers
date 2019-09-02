<?php

use pdeans\Utilities\VarDumper;

if (!function_exists('dp')) {
    /**
     * Print variable with optional label.
     *
     * @param mixed  $data
     * @param string $label
     */
    function dp($data, $label = '')
    {
        VarDumper::dp($data, $label);
    }
}

if (!function_exists('dpx')) {
    /**
     * Print string with all applicable characters converted to HTML entities.
     *
     * @param string $data
     * @param string $label
     */
    function dpx($data, $label = '')
    {
       VarDumper::dpx($data, $label);
    }
}

if (!function_exists('vd')) {
    /**
     * Pretty var dumper with optional label.
     *
     * @param mixed  $data
     * @param string $label
     */
    function vd($data, $label = '')
    {
        VarDumper::vd($data, $label);
    }
}
