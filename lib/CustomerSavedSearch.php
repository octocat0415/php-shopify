<?php

namespace PHPShopify;


/**
 * --------------------------------------------------------------------------
 * CustomerSavedSearch -> Child Resources
 * --------------------------------------------------------------------------
 * @property-read Customer $Customer
 *
 * @method Customer Customer(integer $id = null)
 *
 */
class CustomerSavedSearch extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'customer_saved_search';

    /**
     * @inheritDoc
     */
    protected $childResource = array(
        'Customer',
    );

    /**
     * @inheritDoc
     */
    protected function pluralizeKey()
    {
        return 'customer_saved_searches';
    }
}