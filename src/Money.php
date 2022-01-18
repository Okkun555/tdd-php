<?php

namespace Vendor\App;

class Money
{
    /**
     * @var int
     */
    protected int $amount;

    /**
     * @param Money $otherMoney
     * @return bool
     */
    public function equals(self $otherMoney): bool
    {
        return $this->amount === $otherMoney->amount;
    }
}