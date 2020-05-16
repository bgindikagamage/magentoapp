<?php

namespace Allure\Celebrities\Controller\Adminhtml\Celebrity;

use Magento\Backend\App\Action\Context;
use Allure\Celebrities\Model\CelebrityFactory as ModelFactory;
use Magento\Framework\Controller\Result\JsonFactory;

class InlineEdit extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Allure_Celebrities::data';

    /**
     * @var \allure\celebrity\Model\celebrityFactory
     */
    protected $modelFactory;

    /**
     * @var \Magento\Framework\Controller\Result\JsonFactory
     */
    protected $jsonFactory;

    /**
     * @param Context $context
     * @param ModelFactory $modelFactory
     * @param JsonFactory $jsonFactory
     */
    public function __construct(
        Context $context,
        ModelFactory $modelFactory,
        JsonFactory $jsonFactory
    ) {
        parent::__construct($context);
        $this->modelFactory = $modelFactory;
        $this->jsonFactory = $jsonFactory;
    }

    /**
     * @return \Magento\Framework\Controller\ResultInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute()
    {
        $resultJson = $this->jsonFactory->create();
        $error = false;
        $messages = [];

        if ($this->getRequest()->getParam('isAjax')) {
            $postItems = $this->getRequest()->getParam('items', []);
            if (!count($postItems)) {
                $messages[] = __('Please correct the data sent.');
                $error = true;
            } else {
                foreach (array_keys($postItems) as $Id) {
                    $model = $this->modelFactory->create()->load($Id);
                    try {
                        $model->setData(array_merge($model->getData(), $postItems[$Id]));
                        $model->save($model);
                    } catch (\Exception $e) {
                        $messages[] = $this->getErrorWithId(
                            $model,
                            __($e->getMessage())
                        );
                        $error = true;
                    }
                }
            }
        }

        return $resultJson->setData([
            'messages' => $messages,
            'error' => $error
        ]);
    }

    /**
     * Add title to error message
     *
     * @param string $errorText
     * @return string
     */
    protected function getErrorWithId($model, $errorText)
    {
        return '[ID: ' . $model->getId() . '] ' . $errorText;
    }
}
