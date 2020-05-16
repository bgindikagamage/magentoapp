<?php

namespace Custom\Savecart\Controller\Index;

use Magento\Framework\Controller\ResultFactory;
use Magento\Checkout\Model\Cart as CustomerCart;

class Save extends \Magento\Framework\App\Action\Action {

    public function __construct(
    \Magento\Framework\App\Action\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Custom\Savecart\Model\SavecartFactory $saveCartFactory, \Magento\Customer\Model\SessionFactory $customerSession, \Magento\Checkout\Model\Session $checkoutSession, CustomerCart $cart
    ) {
        $this->saveCartFactory = $saveCartFactory;
        $this->storeManager = $storeManager;
        $this->customerSession = $customerSession->create();
        $this->checkoutSession = $checkoutSession;
        $this->cart = $cart;

        parent::__construct($context);
    }

    public function execute() {
        $post = (array) $this->getRequest()->getPost();

        if (!empty($post)) {

            $baseUrl = $this->storeManager->getStore()->getBaseUrl();

            $saveCartFactory = $this->saveCartFactory->create();
            $saveCartFactory->setPid($post['product_id']);
            $saveCartFactory->setCustomerId($this->customerSession->getId());
            $saveCartFactory->setSku($post['item_sku']);
            $saveCartFactory->setName($post['item_name']);
            $saveCartFactory->setStoreId($post['item_storeid']);
            $saveCartFactory->setQuoteId($post['item_quoteid']);
            $saveCartFactory->setQty($post['item_qty']);
            $saveCartFactory->setPrice($post['item_price']);

            $saveCartFactory->save();
            $this->messageManager->addSuccessMessage('product saved !!');
            
            $allItems = $this->checkoutSession->getQuote()->getAllVisibleItems();
            foreach ($allItems as $item) {
                $itemId = $item->getItemId();
                if ($itemId == $post['item_id']) {
                    $this->cart->removeItem($itemId)->save();
                }
            } 
        }
    }

}
