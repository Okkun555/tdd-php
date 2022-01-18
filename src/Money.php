<?php

namespace Vendor\App;

abstract class Money
{
    /**
     * @var int
     */
    protected int $amount;

    /**
     * Dollarクラスのファクトリメソッド
     * @param int $amount
     * @return Dollar
     */
    public static function dollar(int $amount): Dollar
    {
        return new Dollar($amount);
    }

    /**
     * Francクラスのファクトリメソッド
     * @param int $amount
     * @return Franc
     */
    public static function franc(int $amount): Franc
    {
        return new Franc($amount);
    }

    /**
     * @param Money $otherMoney
     * @return bool
     */
    public function equals(self $otherMoney): bool
    {
        return $this->amount === $otherMoney->amount
            && get_class($this) === get_class($otherMoney);
    }

    abstract public function times(int $multiplier);
}