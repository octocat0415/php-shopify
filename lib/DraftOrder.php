<?php

namespace PHPShopify;



/**
 * --------------------------------------------------------------------------
 * DraftOrder -> Child Resources
 * --------------------------------------------------------------------------
 *
 * @property-read Metafield $Metafield
 *
 * @method Metafield Metafield(integer $id = null)
 *
 * --------------------------------------------------------------------------
 * DraftOrder -> Custom actions
 * --------------------------------------------------------------------------
 * @method array send_invoice()     Send the invoice for a DraftOrder
 * @method array complete()         Complete a DraftOrder
 *
 */
class DraftOrder extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'draft_order';

    /**
     * @inheritDoc
     */
    protected $customPostActions = array(
        'send_invoice',
    );

    /**
     * @inheritDoc
     */
    protected $customPutActions = array(
        'complete',
    );

    /**
     * @inheritDoc
     */
    protected $childResource = array(
        'Metafield',
    );
}
