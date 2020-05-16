<?php

namespace Allure\Celebrities\Controller\Index;

class CelebrityList extends \Magento\Framework\App\Action\Action {

    public function execute() {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }

}
