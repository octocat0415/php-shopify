<?php
<<<<<<< HEAD
=======

>>>>>>> 0876615f4a9c3fd67e4eea4bfd7f4db68d8b9125
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
