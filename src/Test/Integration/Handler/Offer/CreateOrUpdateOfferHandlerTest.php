<?php
/**
 * Copyright © Reach Digital (https://www.reachdigital.io/)
 * See LICENSE.txt for license details.
 */
declare(strict_types=1);

namespace BolCom\RetailerApi\Test\Integration\Handler\Offer;

use BolCom\RetailerApi\Client;
use BolCom\RetailerApi\Handler\Offer\CreateOrUpdateOfferHandler;
use BolCom\RetailerApi\Model\Offer\Command\CreateOrUpdateOffer;
use BolCom\RetailerApi\Model\Offer\Condition;
use BolCom\RetailerApi\Model\Offer\DeliveryCode;
use BolCom\RetailerApi\Model\Offer\RetailerOfferUpsert;
use BolCom\RetailerApi\Model\Shipment\FulfilmentMethod;
use PHPUnit\Framework\TestCase;

class CreateOrUpdateOfferHandlerTest extends TestCase
{
    public function test__invoke(): void
    {
        $handler = new CreateOrUpdateOfferHandler(
            new Client(BOL_CLIENT_ID, BOL_CLIENT_SECRET, null, __DIR__ . '/../token.json')
        );

        $handler(CreateOrUpdateOffer::with(
            RetailerOfferUpsert::fromArray([
                'ean' => '9781785882364',
                'condition' => Condition::IS_NEW,
                'price' => 10.11,
                'deliveryCode' => DeliveryCode::DC12d,
                'quantityInStock' => 10,
                'publish' => true,
                'referenceCode' => 'SKU123',
                'description' => 'My Description',
                'title' => 'My Title',
                'fulfilmentMethod' => FulfilmentMethod::FBR
            ])
        ));
    }
}