<?php

namespace Allure\Celebrities\Controller\Adminhtml\Celebrity;

use Magento\Backend\App\Action\Context;
use Magento\Backend\App\Action;
use Allure\Celebrity\Model\Celebrity;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\TestFramework\Inspection\Exception;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\RequestInterface;

class Save extends \Magento\Backend\App\Action {

    /**
     * @var DataPersistorInterface
     */
    protected $dataPersistor;
    protected $scopeConfig;
    protected $_escaper;
    protected $inlineTranslation;
    protected $_dateFactory;

    /**
     * @param Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     * @param DataPersistorInterface $dataPersistor
     */
    public function __construct(
    Context $context, DataPersistorInterface $dataPersistor, \Magento\Framework\Escaper $escaper, \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Stdlib\DateTime\DateTimeFactory $dateFactory
    ) {

        $this->dataPersistor = $dataPersistor;
        $this->scopeConfig = $scopeConfig;
        $this->_escaper = $escaper;
        $this->_dateFactory = $dateFactory;
        $this->inlineTranslation = $inlineTranslation;
        parent::__construct($context);
    }

    /**
     * Save action
     *
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute() {

        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();


        if ($data) {
            $id = $this->getRequest()->getParam('id');

            /** @var \Magento\Cms\Model\Block $model */
            $model = $this->_objectManager->create('Allure\Celebrities\Model\Celebrity')->load($id);
            if (!$model->getId() && $id) {
                $this->messageManager->addError(__('This Celebrity no longer exists.'));
                return $resultRedirect->setPath('*/*/');
            }

            $data = array_filter($data, function($value) {
                return $value !== '';
            });
            

            if (isset($data['image'][0]['name']) && isset($data['image'][0]['tmp_name'])) {
                $data['image'] = $data['image'][0]['name'];
            } elseif (isset($data['image'][0]['name']) && !isset($data['image'][0]['tmp_name'])) {
                $data['image'] = $data['image'][0]['name'];
            } else {
                $data['image'] = null;
            }


            $model->setData($data);


            $this->inlineTranslation->suspend();
            try {

                $model->save();


                $this->messageManager->addSuccess(__('Celebrity Saved successfully'));
                $this->dataPersistor->clear('celebrity_font_celebrity');

                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['id' => $model->getId()]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addException($e, __('Something went wrong while saving the Celebrity.'));
                print_r($e);
            }

            $this->dataPersistor->set('celebrity_font_celebrity', $data);
        }
        return $resultRedirect->setPath('*/*');
    }

}
