<?php

/**
 * Highlight Active URL
 */
function active_url($file_names)
{
    $basename_url = basename($_SERVER['REQUEST_URI']); // Get File Name
    $parse_url = parse_url($basename_url, PHP_URL_PATH); // Remove Parameters

    foreach ($file_names as $file_name)
    {
        if ($file_name == $parse_url)
        {
            return "active";
        }
    }

    return null;
}

/**
 * Debug function
 * d($var);
 */
function d($var, $caller = null)
{
    if (!isset($caller))
    {
        $debug = debug_backtrace(1);
        $caller = array_shift($debug);
    }
    
    echo '<code>File: ' . $caller['file'] . ' / Line: ' . $caller['line'] . '</code>';
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

/**
 * Debug function with die() after
 * dd($var);
 */
function dd($var)
{
    $debug = debug_backtrace(1);
    $caller = array_shift($debug);
    d($var, $caller);
    die();
}

?>