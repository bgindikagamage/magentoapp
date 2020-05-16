<?php
namespace Allure\Customer\Model\Config\Source;


use Magento\Eav\Model\ResourceModel\Entity\Attribute\OptionFactory;

use Magento\Framework\DB\Ddl\Table;

class YesNo extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
   protected $_options;

   public function getAllOptions()
   {
       if ($this->_options === null) {
           $this->_options = [
               ['value' => '0', 'label' => __('Disable')],
               ['value' => '1', 'label' => __('Enable')]
           ];
       }
       return $this->_options;
   }
   final public function toOptionArray()
   {
      return array(
       array('value' => '0', 'label' => __('Disable')),
       array('value' => '1', 'label' => __('Enable'))
   );
  }
}