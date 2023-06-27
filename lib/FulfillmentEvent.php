<?php

namespace PHPShopify;


class FulfillmentEvent extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'fulfillment_event';

    /**
     * @inheritDoc
     */
    public function getResourcePath()
    {
        return 'events';
    }

    /**
     * @inheritDoc
     */
    public function getResourcePostKey()
    {
        return 'event';
    }
}
