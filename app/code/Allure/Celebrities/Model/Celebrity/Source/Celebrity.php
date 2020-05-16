<?php

namespace Allure\Celebrities\Model\Celebrity\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class Status
 */
class Celebrity implements OptionSourceInterface {

    public function __construct(
    \Allure\Celebrities\Model\CelebrityFactory $celebrityFactory
    ) {
        $this->celebrityFactory = $celebrityFactory;
    }

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray() {
        $collection = $this->celebrityFactory->create()->getCollection();
        // $collection->addFieldToFilter('status', 1);
        $options = [];

        $options[] = array('label' => '--Select--');
        foreach ($collection->getData() as $question) {
            $options[] = [
                'label' => $question['title'],
                'value' => $question['gcat_id']
            ];
        }
        return $options;
    }

}
