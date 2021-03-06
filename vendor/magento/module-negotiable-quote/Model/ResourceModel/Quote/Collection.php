<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\NegotiableQuote\Model\ResourceModel\Quote;

/**
 * Quotes collection
 */
class Collection extends \Magento\Quote\Model\ResourceModel\Quote\Collection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';
}
