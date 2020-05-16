<?php

namespace Custom\Savecart\Model\ResourceModel;

class Savecart extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('savecart', 'id');
    }
}