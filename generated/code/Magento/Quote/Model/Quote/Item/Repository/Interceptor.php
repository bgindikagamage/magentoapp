<?php
namespace Magento\Quote\Model\Quote\Item\Repository;

/**
 * Interceptor class for @see \Magento\Quote\Model\Quote\Item\Repository
 */
class Interceptor extends \Magento\Quote\Model\Quote\Item\Repository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Quote\Api\Data\CartItemInterfaceFactory $itemDataFactory, \Magento\Quote\Model\Quote\Item\CartItemOptionsProcessor $cartItemOptionsProcessor, array $cartItemProcessors = [])
    {
        $this->___init();
        parent::__construct($quoteRepository, $productRepository, $itemDataFactory, $cartItemOptionsProcessor, $cartItemProcessors);
    }

    /**
     * {@inheritdoc}
     */
    public function getList($cartId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        if (!$pluginInfo) {
            return parent::getList($cartId);
        } else {
            return $this->___callPlugins('getList', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Quote\Api\Data\CartItemInterface $cartItem)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save($cartItem);
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($cartId, $itemId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteById');
        if (!$pluginInfo) {
            return parent::deleteById($cartId, $itemId);
        } else {
            return $this->___callPlugins('deleteById', func_get_args(), $pluginInfo);
        }
    }
}
