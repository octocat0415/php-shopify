<?php

namespace PHPShopify;


class Currency extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'currency';

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
        return 'currencies';
    }
}