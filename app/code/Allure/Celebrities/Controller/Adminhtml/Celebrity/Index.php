<?php

namespace Allure\Celebrities\Controller\Adminhtml\Celebrity;

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
     *  celebrityCategories list action
     *
     * @return \Magento\Backend\Model\View\Result\Page|\Magento\Backend\Model\View\Result\Forward
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        /**
         * Set active menu item
         */
        
        $resultPage->setActiveMenu('Allure_Celebrity::celebrity');
        $resultPage->getConfig()->getTitle()->prepend(__('Celebrity'));

        /**
         * Add breadcrumb item
         */
        
        $resultPage->addBreadcrumb(__('Celebrity'), __('celebrity'));
        $resultPage->addBreadcrumb(__('Celebrity manager'), __('Celebrity manager'));
        $resultPage->getConfig()->getTitle()->prepend(__('Celebrity manager'));

        return $resultPage;
    }
}
