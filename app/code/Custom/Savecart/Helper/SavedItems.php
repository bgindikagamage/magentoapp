<?php

namespace Custom\Savecart\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;

class SavedItems extends AbstractHelper {

    public function __construct(
    \Magento\Framework\App\Helper\Context $context, \Custom\Savecart\Model\SavecartFactory $saveCartFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Catalog\Api\ProductRepositoryInterfaceFactory $productRepositoryFactory
    ) {
        $this->customerSession = $customerSession;
        $this->saveCartFactory = $saveCartFactory;
        $this->productRepositoryFactory = $productRepositoryFactory;
        parent::__construct($context);
    }

    public function getSavedItem() {
        $customerId = $this->customerSession->getId();
        $saveCartFactory = $this->saveCartFactory->create()->getCollection()->addFieldToFilter('customer_id', $customerId);
        return $saveCartFactory->getData()[0];
    }

    public function getImage($id) {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $mediaUrl = $objectManager->get('Magento\Store\Model\StoreManagerInterface')
                ->getStore()
                ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        $product = $this->productRepositoryFactory->create()->getById($id);
        return $mediaUrl."catalog/product/". $product->getData('thumbnail');
    }

}
