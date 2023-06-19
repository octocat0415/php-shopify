<?php

namespace PHPShopify;


/**
 * --------------------------------------------------------------------------
 * ShopifyPayment -> Child Resources
 * --------------------------------------------------------------------------
 * @property-read ShopifyResource $DiscountCode
 *
 * @method ShopifyResource DiscountCode(integer $id = null)
 *
 */
class Dispute extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    public $resourceKey = 'dispute';


}
