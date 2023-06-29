<?php

namespace PHPShopify;


/**
 * --------------------------------------------------------------------------
 * GiftCard -> Custom actions
 * --------------------------------------------------------------------------
 * @method array search()       Search for gift cards matching supplied query
 *
 */
class GiftCard extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'gift_card';

    /**
     * @inheritDoc
     */
    public $searchEnabled = true;

    /**
     * Disable a gift card.
     * Disabling a gift card is permanent and cannot be undone.
     *
     * @return array
     */
    public function disable()
    {
        $url = $this->generateUrl(array(), 'disable');

        $dataArray = array(
            'id' => $this->id,
        );

        return $this->post($dataArray, $url);
    }
}