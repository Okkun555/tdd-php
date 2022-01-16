<?php

namespace Vendor\App;

class Dollar
{
    /** @var int */
    private int $amount;

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
     * @return void
     */
    public function times(int $multiplier): void
    {
        $this->amount = $this->amount * $multiplier;
    }
}