<?php

namespace Allure\Celebrities\Model;

class Celebrity extends \Magento\Framework\Model\AbstractModel
{
    public function _construct()
    {
        $this->_init('Allure\Celebrities\Model\ResourceModel\Celebrity');
    }
}
