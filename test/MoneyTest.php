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


        $this->assertEquals(new Dollar(10), $five->times(2));
        $this->assertEquals(new Dollar(15), $five->times(3));
    }

    /**
     * @test
     */
    public function testEquality()
    {
        $dollar = new Dollar(5);
        $this->assertTrue($dollar->equals(new Dollar(5)));

        $this->assertFalse($dollar->equals(new Dollar(2)));
    }
}