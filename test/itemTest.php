<?php

use PHPUnit\Framework\TestCase;

class itemTest extends TestCase
{
    public function testItsWorking()
    {
        $price = 10;
        $this->assertEquals(10, $price);
    }
}