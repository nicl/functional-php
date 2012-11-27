<?php
/**
 * @file
 * A collection of utility functions, inspired by the Clojure core library
 *
 * Note, the parameter item '$args' indicates a multiple (1 or more) arguments are
 * accepted.
 *
 * The term 'map' denotes any array with meaningful indexes (though note,
 * functions which accept a $map parameter will in fact work with any array).
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
    $arg_list = func_get_args();
    array_shift($arg_list);

    if (1 === count($arg_list)) {
        return call_user_func_array($f, $args);
    }

    return call_user_func_array($f, $arg_list);
}

/**
 * Maps keys to values and returns this new array appended onto the provided map
 *
 * Keys and values should match up (do not provide more values than keys for
 * example).
 *
 * The $kvals parameter indicates that you can provide any number of key-value
 * pairs.
 */
function assoc(array $map, $key, $val, $kvals = null)
{
    $arg_list = func_get_args();
    array_shift($arg_list);
    $chunked = array_chunk($arg_list, 2);

    foreach ($chunked as $pair) {
        $pair[1] = isset($pair[1]) ? $pair[1] : null; // for unbalanced case
        $append[$pair[0]] = $pair[1];
    }

    return array_merge($map, $append);
}