<?php

namespace PHPShopify;


class ApiDeprecations extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'deprecated_api_calls';

    /**
     * @inheritDoc
     */
    public $readOnly = true;

    /**
     * @inheritDoc
     */
    public $countEnabled = false;

    /**
     * @inheritDoc
     */
    public function pluralizeKey()
    {
        //Only api deprecations, so no pluralize
        return 'deprecated_api_calls';
    }
}
