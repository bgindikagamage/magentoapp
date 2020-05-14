<?php
namespace Magento\CatalogSearch\Model\ResourceModel\Engine;

/**
 * Interceptor class for @see \Magento\CatalogSearch\Model\ResourceModel\Engine
 */
class Interceptor extends \Magento\CatalogSearch\Model\ResourceModel\Engine implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product\Visibility $catalogProductVisibility, \Magento\Framework\Indexer\ScopeResolver\IndexScopeResolver $indexScopeResolver)
    {
        $this->___init();
        parent::__construct($catalogProductVisibility, $indexScopeResolver);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllowedVisibility()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllowedVisibility');
        if (!$pluginInfo) {
            return parent::getAllowedVisibility();
        } else {
            return $this->___callPlugins('getAllowedVisibility', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function allowAdvancedIndex()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'allowAdvancedIndex');
        if (!$pluginInfo) {
            return parent::allowAdvancedIndex();
        } else {
            return $this->___callPlugins('allowAdvancedIndex', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function processAttributeValue($attribute, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processAttributeValue');
        if (!$pluginInfo) {
            return parent::processAttributeValue($attribute, $value);
        } else {
            return $this->___callPlugins('processAttributeValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepareEntityIndex($index, $separator = ' ')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareEntityIndex');
        if (!$pluginInfo) {
            return parent::prepareEntityIndex($index, $separator);
        } else {
            return $this->___callPlugins('prepareEntityIndex', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isAvailable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAvailable');
        if (!$pluginInfo) {
            return parent::isAvailable();
        } else {
            return $this->___callPlugins('isAvailable', func_get_args(), $pluginInfo);
        }
    }
}
