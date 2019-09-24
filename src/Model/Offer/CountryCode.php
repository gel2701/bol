<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Offer;

final class CountryCode
{
    private $countryCode;

    public function __construct(string $countryCode)
    {
        $this->countryCode = $countryCode;
    }

    public function countryCode(): string
    {
        return $this->countryCode;
    }

    public function withCountryCode(string $countryCode): CountryCode
    {
        return new self($countryCode);
    }

    public static function fromArray(array $data): CountryCode
    {
        if (! isset($data['countryCode']) || ! \is_string($data['countryCode'])) {
            throw new \InvalidArgumentException("Key 'countryCode' is missing in data array or is not a string");
        }

        $countryCode = $data['countryCode'];

        return new self($countryCode);
    }

    public function toArray(): array
    {
        return [
            'countryCode' => $this->countryCode,
        ];
    }
}
