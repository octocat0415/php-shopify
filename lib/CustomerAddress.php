<?php

namespace PHPShopify;


/**
 * --------------------------------------------------------------------------
 * CustomerAddress -> Custom actions
 * --------------------------------------------------------------------------
 * @method array makeDefault()      Sets the address as default for the customer
 *
 */
class CustomerAddress extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'address';

    /**
     * @inheritDoc
     */
    protected $customPutActions = array(
        'default' => 'makeDefault',
    );

    /**
     * @inheritDoc
     */
    protected function pluralizeKey()
    {
        return 'addresses';
    }


    /**
     * Perform bulk operations against a number of addresses
     *
     * @param array $params
     *
     * @return array
     */
    //TODO Issue (Getting Error from API) : Internal server error
    public function set($params)
    {
        $url = $this->generateUrl($params, 'set');

        return $this->put(array(), $url);
    }
}