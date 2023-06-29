<?php

namespace PHPShopify;

/**
 * Class InventoryLevel
 *
 * @method array adjust($data)  Adjust inventory level.
 * @method array connect($data) Connect an inventory item to a location.
 * @method array set($data)     Sets an inventory level for a single inventory item within a location.
 */
class InventoryLevel extends ShopifyResource
{
    /** @inheritDoc */
    protected $resourceKey = 'inventory_level';

    /** @inheritDoc */
    protected $customPostActions = [
        'adjust',
        'connect',
        'set',
    ];
}
