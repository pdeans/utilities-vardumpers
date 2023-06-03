<?php

namespace pdeans\Utilities;

use pdeans\Debuggers\Vardumper\Dumper;

/**
 * Collection of var dumper methods.
 */
class VarDumper
{
    /**
     * Print variable with optional label.
     */
    public static function dp(mixed $data, string $label = ''): void
    {
        if (self::isCli()) {
            echo $label ? "\n$label:" : "",
                "\n",
                is_array($data) || is_object($data) ? print_r($data) : $data,
                "\n";
        } else {
            echo $label ? "<br>$label:" : "",
                "<br><pre>",
                is_array($data) || is_object($data) ? print_r($data) : $data,
                "</pre><br>";
        }
    }

    /**
     * Print string with all applicable characters converted to HTML entities.
     */
    public static function dpx(string $data, string $label = ''): void
    {
        if (self::isCli()) {
            echo $label ? "\n$label:" : "",
                "\n",
                htmlentities((string)$data),
                "\n";
        } else {
            echo $label ? "<br>$label:" : "",
                "<br><pre style=\"white-space:pre-wrap\">",
                htmlentities((string)$data),
                "</pre><br>";
        }
    }

     /**
     * Pretty var dumper with optional label.
     */
    public static function vd(mixed $data, string $label = ''): void
    {
        (new Dumper())->dump($data, $label);
    }

    /**
     * Check if current environment is CLI.
     */
    protected static function isCli(): bool
    {
        return in_array(PHP_SAPI, ['cli', 'phpdbg'], true);
    }
}
