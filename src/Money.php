<?php

namespace Vendor\App;

class Money
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
     * Dollarのファクトリメソッド
     * @param int $amount
     * @return Money
     */
    public static function dollar(int $amount): Money
    {
        return new Money($amount, "USD");

    }

    /**
     * Francファクトリメソッド
     * @param int $amount
     * @return Money
     */
    public static function franc(int $amount): Money
    {
        return new Money($amount, "CHF");
    }

    /**
     * @param int $multiplier
     * @return $this
     */
    public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    /**
     * @param Money $otherMoney
     * @return bool
     */
    public function equals(self $otherMoney): bool
    {
        return $this->amount === $otherMoney->amount
            && $this->currency === $otherMoney->currency();
    }

    /**
     * @return string
     */
    public function currency(): string
    {
        return $this->currency;
    }
}