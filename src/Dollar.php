<?php

namespace Vendor\App;

class Dollar extends Money
{
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}