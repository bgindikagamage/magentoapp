<?php

namespace Custom\Savecart\Model;

class Savecart extends \Magento\Framework\Model\AbstractModel
{
    public function _construct()
    {
        $this->_init('Custom\Savecart\Model\ResourceModel\Savecart');
    }
}
