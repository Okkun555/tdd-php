<?php

namespace Vendor\App;

abstract class Money
{
    /**
     * @var int
     */
    protected int $amount;

    /**
     * @var string
     */
    protected string $currency;

    /**
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * Dollarクラスのファクトリメソッド
     * @param int $amount
     * @return Dollar
     */
    public static function dollar(int $amount): Dollar
    {
        return new Dollar($amount, "USD");

    }

    /**
     * Francクラスのファクトリメソッド
     * @param int $amount
     * @return Franc
     */
    public static function franc(int $amount): Franc
    {
        return new Franc($amount, "CHF");
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

    /**
     * @param int $multiplier
     * @return mixed
     */
    abstract public function times(int $multiplier);

    /**
     * @return string
     */
    abstract public function currency(): string;
}