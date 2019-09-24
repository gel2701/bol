<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Offer\Command;

final class UpdateOffer extends \Prooph\Common\Messaging\Command
{
    use \Prooph\Common\Messaging\PayloadTrait;

    const MESSAGE_NAME = 'BolCom\RetailerApi\Model\Offer\Command\UpdateOffer';

    protected $messageName = self::MESSAGE_NAME;

    public function offerId(): \BolCom\RetailerApi\Model\Offer\OfferId
    {
        return \BolCom\RetailerApi\Model\Offer\OfferId::fromString($this->payload['offerId']);
    }

    public function retailerOffer(): \BolCom\RetailerApi\Model\Offer\RetailerOfferUpdate
    {
        return \BolCom\RetailerApi\Model\Offer\RetailerOfferUpdate::fromArray($this->payload['retailerOffer']);
    }

    public static function with(\BolCom\RetailerApi\Model\Offer\OfferId $offerId, \BolCom\RetailerApi\Model\Offer\RetailerOfferUpdate $retailerOffer): UpdateOffer
    {
        return new self([
            'offerId' => $offerId->toString(),
            'retailerOffer' => $retailerOffer->toArray(),
        ]);
    }

    protected function setPayload(array $payload)
    {
        if (! isset($payload['offerId']) || ! \is_string($payload['offerId'])) {
            throw new \InvalidArgumentException("Key 'offerId' is missing in payload or is not a string");
        }

        if (! isset($payload['retailerOffer']) || ! \is_array($payload['retailerOffer'])) {
            throw new \InvalidArgumentException("Key 'retailerOffer' is missing in payload or is not an array");
        }

        $this->payload = $payload;
    }
}
