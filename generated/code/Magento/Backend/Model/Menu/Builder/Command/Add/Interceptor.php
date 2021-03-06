<?php
namespace Magento\Backend\Model\Menu\Builder\Command\Add;

/**
 * Interceptor class for @see \Magento\Backend\Model\Menu\Builder\Command\Add
 */
class Interceptor extends \Magento\Backend\Model\Menu\Builder\Command\Add implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(array $data = [])
    {
        $this->___init();
        parent::__construct($data);
    }

    /**
     * {@inheritdoc}
     */
    public function chain(\Magento\Backend\Model\Menu\Builder\AbstractCommand $command)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'chain');
        if (!$pluginInfo) {
            return parent::chain($command);
        } else {
            return $this->___callPlugins('chain', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getId');
        if (!$pluginInfo) {
            return parent::getId();
        } else {
            return $this->___callPlugins('getId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $itemParams = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute($itemParams);
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }
}
