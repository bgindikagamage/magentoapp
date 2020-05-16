<?php

namespace Allure\Celebrities\Block;

class Celebrity extends \Magento\Framework\View\Element\Template {

    
    public function __construct(
    \Magento\Backend\Block\Template\Context $context, array $data = [],
     \Allure\Celebrities\Model\CelebrityFactory $CelebrityFactory,
     \Magento\Store\Model\StoreManagerInterface $storeManager

    ) {
        parent::__construct($context, $data);
        $this->CelebrityFactory = $CelebrityFactory;
        $this->storeManager = $storeManager;
    }

    public function getImages() {
        $CelebrityFactory = $this->CelebrityFactory->create()->getCollection();
        $CelebrityFactory->addFieldToFilter('status',1);
    
        
        return $CelebrityFactory;
    }

    public function getMediaUrl()
    {
        $mediaUrl = $this->storeManager->getStore()
                ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        return $mediaUrl;
    }

    public function getListUrl() {
        $baseUrl = $this->storeManager->getStore()->getBaseUrl();
        return $baseUrl."celebrity/index/celebritylist";
    }

}
