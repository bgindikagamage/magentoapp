<?php

namespace Custom\Detail\Block;

class DetailBlock extends \Magento\Framework\View\Element\Template {

    public function __construct(
    \Magento\Backend\Block\Template\Context $context, array $data = [],\Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
        parent::__construct($context, $data);
        $this->storeManager = $storeManager;
    }
	public function getFormUrl() {
        $baseUrl = $this->storeManager->getStore()->getBaseUrl();
        return $baseUrl."detail/index/index";
    } 

}

