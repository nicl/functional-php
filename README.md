functional-php
==============

A collection of utility functions, inspired (mostly) by Clojure. A few are
simply wrappers around existing PHP functions. For the most part, however, they
offer something new. Some functions which appear familiar add value by accepting
a variable number of arguments (for example, max, or merge).

Functions included
------------------

Note, none of this is fully decided yet; more functions may be included, others
may be removed. Nobody knows what's going to happen - it's crazy!!!

* and
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
* every-pred
* filter
* flatten
* group-by
* interleave
* interpose
* iterate
* keep
* map
* mapcat
* map-indexed
* max
* memoize
* merge
* merge-with
* min
* nth
* partial
* partition
* partition-all
* partition-by
* reduce
* reify (?)
* rem
* reverse
* set
* some
* split-at
* split-with
* take
* take-last
* take-nth
* take-while
* unless
* update-in
* zipmap

Tests
-----

If you wish to run the tests you need to have
[PHPUnit](https://github.com/sebastianbergmann/phpunit/) installed. Then, from
the silex-autolink root directory run:

    phpunit

(You may need to adapt the phpunit command and paths depending on your
configuration.)