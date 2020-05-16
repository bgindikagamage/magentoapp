<?php
namespace Allure\Celebrities\Controller\Adminhtml\Celebrity;

use Magento\Backend\App\Action\Context;
use Magento\Ui\Component\MassAction\Filter;
use Allure\Celebrities\Model\ResourceModel\Celebrity\CollectionFactory;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class MassDelete
 */
class MassDelete extends \Magento\Backend\App\Action
{
    private $collectionFactory;
    /**
     * @param Context $context
     * @param Filter $filter
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        Context $context,
        Filter $filter,
        CollectionFactory $collectionFactory
    ) {
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context);
    }
    /**
     * Execute action
     *
     * @return \Magento\Backend\Model\View\Result\Redirect
     * @throws \Magento\Framework\Exception\LocalizedException|\Exception
     */

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Allure_Celebrities::data');
    }

    private function deleteItem($item)
    {
        $item->delete();
    }

    public function execute()
    {
        $postIds = $this->getRequest()->getParam('selected');
        $collection = $this->collectionFactory->create();

        if(isset($postIds)) {
            $collection->addFieldToFilter('id', ['in' => $postIds]);
        }

        $collectionCelebrity = $collection->getSize();

        foreach ($collection as $item) {
            $this->deleteItem($item);
        }
        
        $this->messageManager->addSuccess(__('A total of %1 record(s) have been deleted.', $collectionCelebrity));

        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        return $resultRedirect->setPath('*/*/');
    }
}
