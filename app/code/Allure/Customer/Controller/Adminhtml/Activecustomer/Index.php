<?php

namespace Allure\Customer\Controller\Adminhtml\Activecustomer;

class Index extends \Magento\Backend\App\Action
{
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory =  $resultPageFactory;
        $this->resultForwardFactory = $resultForwardFactory;
    }
    /**
     *
     *
     * @return \Magento\Backend\Model\View\Result\Page|\Magento\Backend\Model\View\Result\Forward
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        /**
         * Set active menu item
         */

        $resultPage->setActiveMenu('Allure_Customer::customer');
        $resultPage->getConfig()->getTitle()->prepend(__('Customer'));

        /**
         * Add breadcrumb item
         */

        $resultPage->addBreadcrumb(__('customer'), __('customer'));
        $resultPage->addBreadcrumb(__('customer manager'), __('customer manager'));
        $resultPage->getConfig()->getTitle()->prepend(__('InActive Customers'));

        return $resultPage;
    }
}
