<?php
namespace Magento\Multishipping\Helper\Data;

/**
 * Interceptor class for @see \Magento\Multishipping\Helper\Data
 */
class Interceptor extends \Magento\Multishipping\Helper\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Checkout\Model\Session $checkoutSession)
    {
        $this->___init();
        parent::__construct($context, $checkoutSession);
    }

    /**
     * {@inheritdoc}
     */
    public function getQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuote');
        if (!$pluginInfo) {
            return parent::getQuote();
        } else {
            return $this->___callPlugins('getQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMaximumQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMaximumQty');
        if (!$pluginInfo) {
            return parent::getMaximumQty();
        } else {
            return $this->___callPlugins('getMaximumQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isMultishippingCheckoutAvailable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isMultishippingCheckoutAvailable');
        if (!$pluginInfo) {
            return parent::isMultishippingCheckoutAvailable();
        } else {
            return $this->___callPlugins('isMultishippingCheckoutAvailable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isModuleOutputEnabled($moduleName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isModuleOutputEnabled');
        if (!$pluginInfo) {
            return parent::isModuleOutputEnabled($moduleName);
        } else {
            return $this->___callPlugins('isModuleOutputEnabled', func_get_args(), $pluginInfo);
        }
    }
}
