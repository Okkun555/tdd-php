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
        $five = Money::dollar(5);

        $this->assertEquals(Money::dollar(10), $five->times(2));
        $this->assertEquals(Money::dollar(15), $five->times(3));
    }

    /**
     * @test
     */
    public function testEquality()
    {
        $dollar = Money::dollar(5);
        $this->assertTrue($dollar->equals(new Dollar(5, 'USD')));
        $this->assertFalse($dollar->equals(new Dollar(2, 'USD')));

        $franc = Money::franc(5);
        $this->assertTrue($franc->equals(Money::franc(5), 'CHF'));
        $this->assertFalse($franc->equals(Money::franc(2), 'CHF'));

        $this->assertFalse($dollar->equals($franc));
    }

    /**
     * @test
     */
    public function testCurrency()
    {

        $this->assertEquals("USD", Money::dollar(1)->currency());
        $this->assertEquals("CHF", Money::franc(1)->currency());
    }
}