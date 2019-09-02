<?php

namespace pdeans\Utilities;

use pdeans\Debuggers\Vardumper\Dumper;

/**
 * VarDumper class
 *
 * Collection of var dumper methods.
 */
class VarDumper
{
    /**
     * Print variable with optional label.
     *
     * @param mixed  $data
     * @param string $label
     */
    public static function dp($data, string $label = '')
    {
        if (http_response_code() === true) {
            echo ($label ? "<br>$label:" : ""),
                "<br><pre>",
                (is_array($data) || is_object($data) ? print_r($data) : $data),
                "</pre><br>";
        } else {
            echo ($label ? "\n$label:" : ""), "\n", (is_array($data) || is_object($data) ? print_r($data) : $data), "\n";
        }
    }

    /**
     * Print string with all applicable characters converted to HTML entities.
     *
     * @param string $data
     * @param string $label
     */
    public static function dpx(string $data, string $label = '')
    {
        if (http_response_code() === true) {
            echo ($label ? "<br>$label:" : ""),
               "<br><pre style=\"white-space:pre-wrap\">",
               htmlentities((string)$data),
               "</pre><br>";
        } else {
            echo ($label ? "\n$label:" : ""), "\n", htmlentities((string)$data), "\n";
        }
    }

     /**
     * Pretty var dumper with optional label.
     *
     * @param mixed  $data
     * @param string $label
     */
    public static function vd($data, string $label = '')
    {
        (new Dumper)->dump($data, $label);
    }
}
