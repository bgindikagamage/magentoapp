<?php
namespace Magento\Framework\Filter\Template;

/**
 * Interceptor class for @see \Magento\Framework\Filter\Template
 */
class Interceptor extends \Magento\Framework\Filter\Template implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Stdlib\StringUtils $string, $variables = [], $directiveProcessors = [], ?\Magento\Framework\Filter\VariableResolverInterface $variableResolver = null)
    {
        $this->___init();
        parent::__construct($string, $variables, $directiveProcessors, $variableResolver);
    }

    /**
     * {@inheritdoc}
     */
    public function setVariables(array $variables)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setVariables');
        if (!$pluginInfo) {
            return parent::setVariables($variables);
        } else {
            return $this->___callPlugins('setVariables', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplateProcessor(callable $callback)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplateProcessor');
        if (!$pluginInfo) {
            return parent::setTemplateProcessor($callback);
        } else {
            return $this->___callPlugins('setTemplateProcessor', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateProcessor()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplateProcessor');
        if (!$pluginInfo) {
            return parent::getTemplateProcessor();
        } else {
            return $this->___callPlugins('getTemplateProcessor', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function filter($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'filter');
        if (!$pluginInfo) {
            return parent::filter($value);
        } else {
            return $this->___callPlugins('filter', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addAfterFilterCallback(callable $afterFilterCallback)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAfterFilterCallback');
        if (!$pluginInfo) {
            return parent::addAfterFilterCallback($afterFilterCallback);
        } else {
            return $this->___callPlugins('addAfterFilterCallback', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function varDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'varDirective');
        if (!$pluginInfo) {
            return parent::varDirective($construction);
        } else {
            return $this->___callPlugins('varDirective', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function forDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'forDirective');
        if (!$pluginInfo) {
            return parent::forDirective($construction);
        } else {
            return $this->___callPlugins('forDirective', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function templateDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'templateDirective');
        if (!$pluginInfo) {
            return parent::templateDirective($construction);
        } else {
            return $this->___callPlugins('templateDirective', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dependDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dependDirective');
        if (!$pluginInfo) {
            return parent::dependDirective($construction);
        } else {
            return $this->___callPlugins('dependDirective', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function ifDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'ifDirective');
        if (!$pluginInfo) {
            return parent::ifDirective($construction);
        } else {
            return $this->___callPlugins('ifDirective', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setStrictMode(bool $strictMode) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStrictMode');
        if (!$pluginInfo) {
            return parent::setStrictMode($strictMode);
        } else {
            return $this->___callPlugins('setStrictMode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isStrictMode() : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isStrictMode');
        if (!$pluginInfo) {
            return parent::isStrictMode();
        } else {
            return $this->___callPlugins('isStrictMode', func_get_args(), $pluginInfo);
        }
    }
}
