<?php

namespace Vendor\App;

class Dollar extends Money
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
     * @return self
     */
    public function times(int $multiplier): Money
    {
        return Money::dollar($this->amount * $multiplier);
    }

    /**
     * @return string
     */
    public function currency(): string
    {
        return $this->currency;
    }
}