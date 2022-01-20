<?php

namespace Vendor\App;

interface Expression {
    /**
     * @param string $to
     * @return Money
     */
    public function reduce(string $to): Money;
}