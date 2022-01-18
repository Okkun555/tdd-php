<?php

namespace Vendor\App;

class Dollar extends Money
{
    /**
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

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
    public function times(int $multiplier): self
    {
        return new self($this->amount * $multiplier);
    }
}