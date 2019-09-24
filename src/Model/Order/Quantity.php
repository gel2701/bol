<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Order;

final class Quantity
{
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }

    public static function fromScalar(int $quantity): Quantity
    {
        return new self($quantity);
    }

    public function toScalar(): int
    {
        return $this->value;
    }
}
