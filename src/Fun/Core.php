<?php

namespace Fun\Core;

/**
 * Like the 'and' logical operator but accepting multiple arguments
 *
 * Visits arguments in order. If an argument evaluates to boolean false then
 * stops and returns false, else (if all items are truthy) returns the last item
 * (which will evaluate to boolean true).
 *
 * Note, this operator *does not* short-circuit which limits its usefulness.
 */
function and_all($args)
{
    $arg_list = func_get_args();

    foreach ($arg_list as $item) {
        if (!$item) return false;
    }

    return end($arg_list);
}