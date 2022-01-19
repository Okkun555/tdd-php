<?php

namespace Vendor\App;

class Franc extends Money
{

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $multiplier
     * @return $this
     */
    public function times(int $multiplier): Money
    {
        return Money::franc($this->amount * $multiplier);
    }

    /**
     * @return string
     */
    public function currency(): string
    {
        return $this->currency;
    }
}