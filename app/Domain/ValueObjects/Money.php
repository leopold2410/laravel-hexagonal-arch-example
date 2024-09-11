<?php

namespace App\Domain\ValueObjects;

use http\Exception\InvalidArgumentException;
use Illuminate\Console\View\Components\Error;

final class Money
{
    private int $amount;
    private string $currency;

    public function __construct(int $amount, string $currency) {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    public  function add(Money $money): Money {
        if ($this->currency !== $money->getCurrency())
            throw new InvalidArgumentException("not same currency", 400);
        return new Money($this->amount + $money->getAmount(), $this->currency);
    }
}
