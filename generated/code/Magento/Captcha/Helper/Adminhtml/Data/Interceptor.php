<?php
namespace Magento\Captcha\Helper\Adminhtml\Data;

/**
 * Interceptor class for @see \Magento\Captcha\Helper\Adminhtml\Data
 */
class Interceptor extends \Magento\Captcha\Helper\Adminhtml\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Store\Model\StoreManager $storeManager, \Magento\Framework\Filesystem $filesystem, \Magento\Captcha\Model\CaptchaFactory $factory, \Magento\Backend\App\ConfigInterface $backendConfig)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $filesystem, $factory, $backendConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig($key, $store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfig');
        if (!$pluginInfo) {
            return parent::getConfig($key, $store);
        } else {
            return $this->___callPlugins('getConfig', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCaptcha($formId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCaptcha');
        if (!$pluginInfo) {
            return parent::getCaptcha($formId);
        } else {
            return $this->___callPlugins('getCaptcha', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFonts()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFonts');
        if (!$pluginInfo) {
            return parent::getFonts();
        } else {
            return $this->___callPlugins('getFonts', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImgDir($website = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImgDir');
        if (!$pluginInfo) {
            return parent::getImgDir($website);
        } else {
            return $this->___callPlugins('getImgDir', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImgUrl($website = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImgUrl');
        if (!$pluginInfo) {
            return parent::getImgUrl($website);
        } else {
            return $this->___callPlugins('getImgUrl', func_get_args(), $pluginInfo);
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
