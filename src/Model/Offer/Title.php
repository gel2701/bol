<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Offer;

final class Title
{
    private $value;

    public function __construct(string $value)
    {
        if (!\Assert\Assertion::betweenLength($value, 0, 500)) {
            throw new \InvalidArgumentException('');
        }

        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public static function fromString(string $title): Title
    {
        return new self($title);
    }

    public function toString(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
