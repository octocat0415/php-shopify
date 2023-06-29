<?php

namespace PHPShopify;


/**
 * --------------------------------------------------------------------------
 * Country -> Child Resources
 * --------------------------------------------------------------------------
 * @property-read Province $Province
 *
 * @method Province Province(integer $id = null)
 *
 */
class Country extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'country';

    /**
     * @inheritDoc
     */
    protected $childResource = array(
        'Province',
    );

    /**
     * @inheritDoc
     */
    protected function pluralizeKey()
    {
        return 'countries';
    }
}