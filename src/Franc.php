<?php

namespace Vendor\App;

class Franc
{
    /**
     * @var int
     */
    private int $amount;

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
     * @return $this
     */
    public function times(int $multiplier): self
    {
        return new self($this->amount * $multiplier);
    }

    /**
     * @param Franc $otherFranc
     * @return bool
     */
    public function equals(self $otherFranc): bool
    {
        return $this->getAmount() === $otherFranc->getAmount();
    }
}