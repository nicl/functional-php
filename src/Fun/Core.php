<?php
/**
 * @file
 * A collection of utility functions, inspired by the Clojure core library
 *
 * Note, the parameter item $args indicates a multiple (1 or more) arguments are
 * accepted.
 */


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

/**
 * Applies a function to a collection, as if each collection item were a
 * separate argument
 *
 * For example,
 *
 *     apply('and_all', [1, 2, false])
 * =>  and_all(1, 2, false)
 *
 * @todo implement version which accepts multiple collections (like the Clojure
 * core version)
 */
function apply($f, $args)
{
    return call_user_func_array($f, $args);
}