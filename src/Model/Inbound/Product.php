<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Inbound;

final class Product
{
    private $ean;
    private $bsku;
    private $announcedQuantity;
    private $receivedQuantity;
    private $state;

    public function __construct(\BolCom\RetailerApi\Model\Offer\Ean $ean, BSku $bsku, int $announcedQuantity, int $receivedQuantity, State $state)
    {
        $this->ean = $ean;
        $this->bsku = $bsku;
        $this->announcedQuantity = $announcedQuantity;
        $this->receivedQuantity = $receivedQuantity;
        $this->state = $state;
    }

    public function ean(): \BolCom\RetailerApi\Model\Offer\Ean
    {
        return $this->ean;
    }

    public function bsku(): BSku
    {
        return $this->bsku;
    }

    public function announcedQuantity(): int
    {
        return $this->announcedQuantity;
    }

    public function receivedQuantity(): int
    {
        return $this->receivedQuantity;
    }

    public function state(): State
    {
        return $this->state;
    }

    public function withEan(\BolCom\RetailerApi\Model\Offer\Ean $ean): Product
    {
        return new self($ean, $this->bsku, $this->announcedQuantity, $this->receivedQuantity, $this->state);
    }

    public function withBsku(BSku $bsku): Product
    {
        return new self($this->ean, $bsku, $this->announcedQuantity, $this->receivedQuantity, $this->state);
    }

    public function withAnnouncedQuantity(int $announcedQuantity): Product
    {
        return new self($this->ean, $this->bsku, $announcedQuantity, $this->receivedQuantity, $this->state);
    }

    public function withReceivedQuantity(int $receivedQuantity): Product
    {
        return new self($this->ean, $this->bsku, $this->announcedQuantity, $receivedQuantity, $this->state);
    }

    public function withState(State $state): Product
    {
        return new self($this->ean, $this->bsku, $this->announcedQuantity, $this->receivedQuantity, $state);
    }

    public static function fromArray(array $data): Product
    {
        if (! isset($data['ean']) || ! \is_string($data['ean'])) {
            throw new \InvalidArgumentException("Key 'ean' is missing in data array or is not a string");
        }

        $ean = \BolCom\RetailerApi\Model\Offer\Ean::fromString($data['ean']);

        if (! isset($data['bsku']) || ! \is_string($data['bsku'])) {
            throw new \InvalidArgumentException("Key 'bsku' is missing in data array or is not a string");
        }

        $bsku = BSku::fromString($data['bsku']);

        if (! isset($data['announcedQuantity']) || ! \is_int($data['announcedQuantity'])) {
            throw new \InvalidArgumentException("Key 'announcedQuantity' is missing in data array or is not a int");
        }

        $announcedQuantity = $data['announcedQuantity'];

        if (! isset($data['receivedQuantity']) || ! \is_int($data['receivedQuantity'])) {
            throw new \InvalidArgumentException("Key 'receivedQuantity' is missing in data array or is not a int");
        }

        $receivedQuantity = $data['receivedQuantity'];

        if (! isset($data['state']) || ! \is_string($data['state'])) {
            throw new \InvalidArgumentException("Key 'state' is missing in data array or is not a string");
        }

        $state = State::fromValue($data['state']);

        return new self(
            $ean,
            $bsku,
            $announcedQuantity,
            $receivedQuantity,
            $state
        );
    }
}
