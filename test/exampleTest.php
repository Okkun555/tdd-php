<?php

namespace Vendor\App;

use PHPUnit\Framework\TestCase;
use Vendor\App\Greet;

class GreetTest extends TestCase
{
    /**
     * @test
     */
    public function testMultiple()
    {
        $greet = new Greet();
        $expected = "hello";
        $this->assertEquals($expected, $greet->sayHello());
    }
}
