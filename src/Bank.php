<?php

namespace Vendor\App;

class Bank
{
    public function reduce(Expression $source, string $to): Money
    {
        /** @var Sum $sum */
        $sum = $source;
        return $sum->reduce($to);
    }
}