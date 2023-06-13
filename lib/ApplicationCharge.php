<?php
namespace PHPShopify;


class ApplicationCharge extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'application_charge';

    /**
     * @inheritDoc
     */
    public $countEnabled = false;
    
    // To activate ApplicationCharge
    protected $customPostActions = array(
       'activate',
   );
}
