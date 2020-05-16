<?php

namespace Allure\Celebrities\Model\ResourceModel\Celebrity;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';
    public function _construct()
    {
        $this->_init('Allure\Celebrities\Model\Celebrity', 'Allure\Celebrities\Model\ResourceModel\Celebrity');
        $this->_map['fields']['id'] = 'main_table.id';
    }
}