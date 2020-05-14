<?php
namespace Magento\TargetRule\Model\Indexer\TargetRule\Product\Rule;

/**
 * Interceptor class for @see \Magento\TargetRule\Model\Indexer\TargetRule\Product\Rule
 */
class Interceptor extends \Magento\TargetRule\Model\Indexer\TargetRule\Product\Rule implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\TargetRule\Model\Indexer\TargetRule\Product\Rule\Action\Row $productRuleIndexerRow, \Magento\TargetRule\Model\Indexer\TargetRule\Product\Rule\Action\Rows $productRuleIndexerRows, \Magento\TargetRule\Model\Indexer\TargetRule\Action\Full $productRuleIndexerFull, \Magento\TargetRule\Model\Indexer\TargetRule\Rule\Product\Processor $ruleProductProcessor, \Magento\TargetRule\Model\Indexer\TargetRule\Product\Rule\Processor $productRuleProcessor, \Magento\TargetRule\Model\Indexer\TargetRule\Action\Clean $productRuleIndexerClean, \Magento\TargetRule\Model\Indexer\TargetRule\Product\Rule\Action\CleanDeleteProduct $productRuleIndexerCleanDeleteProduct)
    {
        $this->___init();
        parent::__construct($productRuleIndexerRow, $productRuleIndexerRows, $productRuleIndexerFull, $ruleProductProcessor, $productRuleProcessor, $productRuleIndexerClean, $productRuleIndexerCleanDeleteProduct);
    }

    /**
     * {@inheritdoc}
     */
    public function execute($productIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute($productIds);
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function executeFull()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeFull');
        if (!$pluginInfo) {
            return parent::executeFull();
        } else {
            return $this->___callPlugins('executeFull', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function executeList(array $productIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeList');
        if (!$pluginInfo) {
            return parent::executeList($productIds);
        } else {
            return $this->___callPlugins('executeList', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function executeRow($productId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeRow');
        if (!$pluginInfo) {
            return parent::executeRow($productId);
        } else {
            return $this->___callPlugins('executeRow', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function cleanByCron()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cleanByCron');
        if (!$pluginInfo) {
            return parent::cleanByCron();
        } else {
            return $this->___callPlugins('cleanByCron', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function cleanAfterProductDelete($productId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cleanAfterProductDelete');
        if (!$pluginInfo) {
            return parent::cleanAfterProductDelete($productId);
        } else {
            return $this->___callPlugins('cleanAfterProductDelete', func_get_args(), $pluginInfo);
        }
    }
}
