<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Reduction;

final class Reduction
{
    private $ean;

    public function __construct(\BolCom\RetailerApi\Model\Offer\Ean $ean)
    {
        $this->ean = $ean;
    }

    public function ean(): \BolCom\RetailerApi\Model\Offer\Ean
    {
        return $this->ean;
    }

    public function withEan(\BolCom\RetailerApi\Model\Offer\Ean $ean): Reduction
    {
        return new self($ean);
    }

    public static function fromArray(array $data): Reduction
    {
        if (! isset($data['ean']) || ! \is_string($data['ean'])) {
            throw new \InvalidArgumentException("Key 'ean' is missing in data array or is not a string");
        }

        $ean = \BolCom\RetailerApi\Model\Offer\Ean::fromString($data['ean']);

        return new self($ean);
    }
}
