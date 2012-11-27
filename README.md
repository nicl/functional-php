functional-php
==============

<img src="https://github.com/downloads/nicl/functional-php/functional-php.png"
 alt="success-kid-php" align="right"/>

A collection of utility functions, inspired (mostly) by Clojure. A few are
simply wrappers around existing PHP functions. For the most part, however, they
offer something new. Some functions which appear familiar add value by accepting
a variable number of arguments (for example, max, or merge).

Functions included
------------------

Note, none of this is fully decided yet; more functions may be included, others
may be removed. Nobody knows what's going to happen - it's crazy!!!

* and_all
* apply
* assoc
* comp
* compare
* complement
* cond
* contains
* dissoc
* distinct
* drop
* every
* every_pred
* filter
* flatten
* group_by
* interleave
* interpose
* iterate
* keep
* map
* mapcat
* map_indexed
* max
* memoize
* merge
* merge_with
* min
* nth
* partial
* partition
* partition_all
* partition_by
* reduce
* reify (?)
* rem
* reverse
* set
* some
* split_at
* split_with
* take
* take_last
* take_nth
* take_while
* unless
* update_in
* zipmap

Tests
-----

If you wish to run the tests you need to have
[PHPUnit](https://github.com/sebastianbergmann/phpunit/) installed. Then, from
the functional-php root directory run:

    phpunit

(You may need to adapt the phpunit command and paths depending on your
configuration.)