<?php

namespace Fun;

use Fun\Core as Core;
use PHPUnit_Framework_Testcase;

class CoreTest extends PHPUnit_Framework_Testcase
{
    public function testAnd()
    {
        $this->assertFalse(Core\and_all(true, 0));
        $this->assertFalse(Core\and_all(true, false, true));
        $this->assertEquals(1, Core\and_all(true, "apple", 1));
    }
}