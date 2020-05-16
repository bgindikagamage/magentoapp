<?php

namespace Custom\Savecart\Block\Cart;

class SavedItem extends \Magento\Framework\View\Element\Template {

    public function __construct(
    \Magento\Backend\Block\Template\Context $context, array $data = [], 
    \Custom\Savecart\Model\SavecartFactory $saveCartFactory, 
    \Magento\Customer\Model\Session $customerSession, 
    \Magento\Catalog\Api\ProductRepositoryInterfaceFactory $productRepositoryFactory
    ) {
        $this->customerSession = $customerSession;
        $this->saveCartFactory = $saveCartFactory;
        $this->productRepositoryFactory = $productRepositoryFactory;
        parent::__construct($context, $data);
    }

    public function getSavedItem() {
        $customerId = $this->customerSession->getId();
        
        $saveCartFactory = $this->saveCartFactory->create()->getCollection()->addFieldToFilter('customer_id', $customerId);
                
        if(count($saveCartFactory->getData())>0){
            return $saveCartFactory->getData();
        }
        else{
            return array();
        }   
    }

    public function getImage($id) {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $mediaUrl = $objectManager->get('Magento\Store\Model\StoreManagerInterface')
        ->getStore()
        ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        $product = $this->productRepositoryFactory->create()->getById($id);
        return $mediaUrl . "catalog/product/" . $product->getData('thumbnail');
    }
}
