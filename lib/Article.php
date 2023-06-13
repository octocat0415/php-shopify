<?php

namespace PHPShopify;


/**
 * --------------------------------------------------------------------------
 * Article -> Child Resources
 * --------------------------------------------------------------------------
 * @property-read Event $Event
 * @property-read Metafield $Metafield
 *
 * @method Event Event(integer $id = null)
 * @method Metafield Metafield(integer $id = null)
 *
 */
class Article extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'article';

    /**
     * @inheritDoc
     */
    protected $childResource = array(
        'Event',
        'Metafield',
    );
}