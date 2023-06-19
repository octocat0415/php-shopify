<?php

namespace PHPShopify;


/**
 * --------------------------------------------------------------------------
 * Discount -> Custom actions
 * --------------------------------------------------------------------------
 * @method array enable()       Enable a discount
 * @method array disable()      Disable a discount
 *
 */
class Discount extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'discount';

    /**
     * @inheritDoc
     */
    protected $customPostActions = array(
        'enable',
        'disable',
    );
}
