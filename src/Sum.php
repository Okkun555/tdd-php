<?php

namespace Vendor\App;

class Sum implements Expression
{
    /**
     * @var Money $augend
     */
    private Money $augend;

    /**
     * @var Money
     */
    private Money $addend;

    /**
     * @param Money $augend
     * @param Money $addend
     */
    public function __construct(Money $augend, Money $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    /**
     * @param string $to
     * @return Money
     */
    public function reduce(string $to): Money
    {
        $amount = $this->augend->getAmount() + $this->addend->getAmount();
        return new Money($amount, $to);
    }

    /**
     * @return Money
     */
    public function getAugend(): Money
    {
        return $this->augend;
    }

    /**
     * @return Money
     */
    public function getAddend(): Money
    {
        return $this->addend;
    }
}