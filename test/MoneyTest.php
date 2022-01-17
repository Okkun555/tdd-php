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

        $product = $five->times(2);
        $this->assertEquals(10, $product->getAmount());

        $product = $five->times(3);
        $this->assertEquals(15, $product->getAmount());
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