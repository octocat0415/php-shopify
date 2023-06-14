<?php


/**
 * --------------------------------------------------------------------------
 * DiscountCode -> Batch action
 * --------------------------------------------------------------------------
 *
 */

class Batch extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'batch';

    protected function getResourcePath()
    {
        return $this->resourceKey;
    }

    protected function wrapData($dataArray, $dataKey = null)
    {
        return ['discount_codes' => $dataArray];
    }

}
