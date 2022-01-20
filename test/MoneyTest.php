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

        // オブジェクトは不変にしたいので比較の仕方をequalsメソッドを利用する形で表現
        $this->assertTrue(Money::dollar(10)->equals($five->times(2)));
        $this->assertTrue(Money::dollar(15)->equals($five->times(3)));
    }

    /**
     * @test
     */
    public function testEquality()
    {
        $dollar = Money::dollar(5);
        $this->assertTrue($dollar->equals(Money::dollar(5)));
        $this->assertFalse($dollar->equals(Money::dollar(2)));

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