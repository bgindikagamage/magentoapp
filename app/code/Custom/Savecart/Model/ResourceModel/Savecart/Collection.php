<?php

namespace Custom\Savecart\Model\ResourceModel\Savecart;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'entity_id';
    public function _construct()
    {
        $this->_init('Custom\Savecart\Model\Savecart', 'Custom\Savecart\Model\ResourceModel\Savecart');
        $this->_map['fields']['id'] = 'main_table.id';
    }
}