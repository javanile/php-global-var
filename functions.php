<?php

/**
 *
 */
if (!function_exists('get_global_var')) {
    function get_global_var($var)
    {
        global ${$var};
        return ${$var};
    }
}

/**
 *
 */
if (!function_exists('set_global_var')) {
    function set_global_var($var, $value)
    {
        global ${$var};
        ${$var} = $value;
    }
}
