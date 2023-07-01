<?php

namespace PHPShopify;


class Shop extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'shop';

    /**
     * @inheritDoc
     */
    public $countEnabled = false;

    /**
     * @inheritDoc
     */
    public $readOnly = true;

    /**
     * @inheritDoc
     */
    public function pluralizeKey()
    {
        //Only one shop object for each store. So no pluralize
        return 'shop';
    }
}
