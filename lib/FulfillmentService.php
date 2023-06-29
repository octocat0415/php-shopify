<?php

namespace PHPShopify;


class FulfillmentService extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'fulfillment_service';

    /**
     * @inheritDoc
     */
    public $countEnabled = false;
}