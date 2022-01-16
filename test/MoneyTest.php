<?php

namespace Vendor\App;

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    /**
     * @test
     */
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $five->times(2);

        $this->assertEquals(10, $five->getAmount());
    }
}