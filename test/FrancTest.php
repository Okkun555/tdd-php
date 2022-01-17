<?php

namespace Vendor\App;

use PHPUnit\Framework\TestCase;

class FrancTest extends TestCase
{
    /**
     * @test
     */
    public function testFrancMultiplication()
    {
        $five = new Franc(5);

        $this->assertEquals(new Franc(10), $five->times(2));
        $this->assertEquals(new Franc(15), $five->times(3));
    }
}