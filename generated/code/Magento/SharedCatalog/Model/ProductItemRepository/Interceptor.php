<?php
namespace Magento\SharedCatalog\Model\ProductItemRepository;

/**
 * Interceptor class for @see \Magento\SharedCatalog\Model\ProductItemRepository
 */
class Interceptor extends \Magento\SharedCatalog\Model\ProductItemRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\SharedCatalog\Model\ProductItemFactory $sharedCatalogProductItemFactory, \Magento\SharedCatalog\Model\ResourceModel\ProductItem $sharedCatalogProductItemResource, \Magento\SharedCatalog\Model\ResourceModel\ProductItem\CollectionFactory $sharedCatalogProductItemCollectionFactory, \Magento\SharedCatalog\Api\Data\ProductItemSearchResultsInterfaceFactory $searchResultsFactory, \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor)
    {
        $this->___init();
        parent::__construct($sharedCatalogProductItemFactory, $sharedCatalogProductItemResource, $sharedCatalogProductItemCollectionFactory, $searchResultsFactory, $collectionProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\SharedCatalog\Api\Data\ProductItemInterface $sharedCatalogProductItem)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save($sharedCatalogProductItem);
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function get($sharedCatalogProductItemId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        if (!$pluginInfo) {
            return parent::get($sharedCatalogProductItemId);
        } else {
            return $this->___callPlugins('get', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\SharedCatalog\Api\Data\ProductItemInterface $sharedCatalogProductItem)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        if (!$pluginInfo) {
            return parent::delete($sharedCatalogProductItem);
        } else {
            return $this->___callPlugins('delete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($sharedCatalogProductItemId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteById');
        if (!$pluginInfo) {
            return parent::deleteById($sharedCatalogProductItemId);
        } else {
            return $this->___callPlugins('deleteById', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItems(array $sharedCatalogProductItems)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteItems');
        if (!$pluginInfo) {
            return parent::deleteItems($sharedCatalogProductItems);
        } else {
            return $this->___callPlugins('deleteItems', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        if (!$pluginInfo) {
            return parent::getList($searchCriteria);
        } else {
            return $this->___callPlugins('getList', func_get_args(), $pluginInfo);
        }
    }
}
