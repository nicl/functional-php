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
    }
}