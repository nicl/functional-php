<?php

namespace Fun;

use PHPUnit_Framework_Testcase;

class CoreTest extends PHPUnit_Framework_Testcase
{
    public function testAnd()
    {
        $this->assertFalse(and_all(true, 0));
        $this->assertFalse(and_all(true, false, true));
        $this->assertEquals(1, and_all(true, "apple", 1));
    }

    public function testApply()
    {
        $this->assertFalse(apply('and_all', [1, 2, false]));
        $this->assertEquals(1, apply('and_all', [true, "apple", 1]));
        $this->assertEquals(
            ['a', 'b', 'c', 'd', 'e', 'f'],
            apply('array_merge', [['a', 'b', 'c'], ['d', 'e', 'f']]));
    }

    public function testAssoc()
    {
        $this->assertEquals(['a' => 1, 'b' => 2],
            assoc(['a' => 1], 'b', 2));

        $this->assertEquals(['a' => 1, 'b' => 2, 'c' => 3],
            assoc(['a' => 1], 'b', 2, 'c', 3));

        $this->assertEquals(['a' => 1, 'b' => [2, 3]],
            assoc(['a' => 1], 'b', [2, 3]));
    }

    public function testComp()
    {
        $abs_all = function (array $items) {
            foreach ($items as &$item) {
                $item = abs($item);
            }

            return $items;
        };

        $biggest = comp('max', $abs_all);
        $this->assertEquals(3, $biggest([1, 2, -3]));
    }

    public function testCompare()
    {
        $this->assertEquals(-1, compare(1, 2));
        $this->assertEquals(0, compare(2, 2));
        $this->assertEquals(1, compare('c', 'b'));
    }

    public function testComplement()
    {
        $isEmpty = function ($x) { return empty($x); }; // empty is not callable
        $notEmpty = complement($isEmpty);

        $this->assertTrue($notEmpty("something"));
        $this->assertFalse($notEmpty(""));
    }

    public function testConcat()
    {
        $this->assertEquals(
            range(1, 9),
            concat([1, 2, 3], [4, 5, 6], [7, 8, 9]));

        $this->assertEquals(
            ['a' => 1, 'b' => 3, 'c' => 4],
            concat(['a' => 1, 'b' => 2], ['b' => 3, 'c' => 4]));
    }

    public function testContains()
    {
        $this->assertTrue(contains(['a' => 1, 'b' => 2, 'c' => 3], 'b'));
        $this->assertFalse(contains(['a' => 1, 'b' => 2, 'c' => 3], 'd'));
    }
}