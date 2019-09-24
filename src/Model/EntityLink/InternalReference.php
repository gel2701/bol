<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\EntityLink;

final class InternalReference
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

    public static function fromScalar(int $internalReference): InternalReference
    {
        return new self($internalReference);
    }

    public function toScalar(): int
    {
        return $this->value;
    }
}
