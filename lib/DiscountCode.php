<?php

namespace PHPShopify;


/**
 * --------------------------------------------------------------------------
 * DiscountCode -> Custom actions
 * --------------------------------------------------------------------------
 * @method array lookup()       Retrieves the location of a discount code.
 *
 */

class DiscountCode extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'discount_code';

    /**
     * @inheritDoc
     */
    protected $customGetActions = array(
        'lookup',
    );
}
