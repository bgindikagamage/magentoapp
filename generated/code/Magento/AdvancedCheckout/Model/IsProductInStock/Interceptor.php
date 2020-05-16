<?php
namespace Magento\AdvancedCheckout\Model\IsProductInStock;

/**
 * Interceptor class for @see \Magento\AdvancedCheckout\Model\IsProductInStock
 */
class Interceptor extends \Magento\AdvancedCheckout\Model\IsProductInStock implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry)
    {
        $this->___init();
        parent::__construct($productRepository, $stockRegistry);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(int $productId, int $websiteId) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute($productId, $websiteId);
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }
}
