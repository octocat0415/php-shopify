<?php

namespace PHPShopify;

/**
 * --------------------------------------------------------------------------
 * Blog -> Child Resources
 * --------------------------------------------------------------------------
 * @property-read Article $Article
 * @property-read Event $Event
 * @property-read Metafield $Metafield
 *
 * @method Article Article(integer $id = null)
 * @method Event Event(integer $id = null)
 * @method Metafield Metafield(integer $id = null)
 *
 */
class Blog extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    public $resourceKey = 'blog';

    /**
     * @inheritDoc
     */
    protected $childResource = array(
        'Article',
        'Event',
        'Metafield',
    );
}