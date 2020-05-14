<?php
namespace Magento\Company\Model\Company\Structure;

/**
 * Interceptor class for @see \Magento\Company\Model\Company\Structure
 */
class Interceptor extends \Magento\Company\Model\Company\Structure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Company\Model\ResourceModel\Structure\Tree $tree, \Magento\Company\Api\Data\StructureInterfaceFactory $structureFactory, \Magento\Company\Model\StructureRepository $structureRepository, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Company\Api\TeamRepositoryInterface $teamRepository, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepositoryInterface)
    {
        $this->___init();
        parent::__construct($tree, $structureFactory, $structureRepository, $searchCriteriaBuilder, $teamRepository, $customerRepositoryInterface);
    }

    /**
     * {@inheritdoc}
     */
    public function addDataToTree(\Magento\Framework\Data\Tree\Node $tree)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addDataToTree');
        if (!$pluginInfo) {
            return parent::addDataToTree($tree);
        } else {
            return $this->___callPlugins('addDataToTree', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function filterTree(\Magento\Framework\Data\Tree\Node $tree, $field, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'filterTree');
        if (!$pluginInfo) {
            return parent::filterTree($tree, $field, $value);
        } else {
            return $this->___callPlugins('filterTree', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTreeByCustomerId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTreeByCustomerId');
        if (!$pluginInfo) {
            return parent::getTreeByCustomerId($id);
        } else {
            return $this->___callPlugins('getTreeByCustomerId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAllowedIds($userId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllowedIds');
        if (!$pluginInfo) {
            return parent::getAllowedIds($userId);
        } else {
            return $this->___callPlugins('getAllowedIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function moveNode($id, $newParentId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'moveNode');
        if (!$pluginInfo) {
            return parent::moveNode($id, $newParentId);
        } else {
            return $this->___callPlugins('moveNode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTreeById($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTreeById');
        if (!$pluginInfo) {
            return parent::getTreeById($id);
        } else {
            return $this->___callPlugins('getTreeById', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStructureByCustomerId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStructureByCustomerId');
        if (!$pluginInfo) {
            return parent::getStructureByCustomerId($id);
        } else {
            return $this->___callPlugins('getStructureByCustomerId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStructureByTeamId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStructureByTeamId');
        if (!$pluginInfo) {
            return parent::getStructureByTeamId($id);
        } else {
            return $this->___callPlugins('getStructureByTeamId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addNode($entityId, $entityType, $parentId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addNode');
        if (!$pluginInfo) {
            return parent::addNode($entityId, $entityType, $parentId);
        } else {
            return $this->___callPlugins('addNode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeCustomerNode($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeCustomerNode');
        if (!$pluginInfo) {
            return parent::removeCustomerNode($customerId);
        } else {
            return $this->___callPlugins('removeCustomerNode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function moveStructureChildrenToParent($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'moveStructureChildrenToParent');
        if (!$pluginInfo) {
            return parent::moveStructureChildrenToParent($customerId);
        } else {
            return $this->___callPlugins('moveStructureChildrenToParent', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function moveCustomerStructure($sourceCustomerId, $targetCustomerId, $keepOld)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'moveCustomerStructure');
        if (!$pluginInfo) {
            return parent::moveCustomerStructure($sourceCustomerId, $targetCustomerId, $keepOld);
        } else {
            return $this->___callPlugins('moveCustomerStructure', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAllowedChildrenIds($parentId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllowedChildrenIds');
        if (!$pluginInfo) {
            return parent::getAllowedChildrenIds($parentId);
        } else {
            return $this->___callPlugins('getAllowedChildrenIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUserChildTeams($userId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUserChildTeams');
        if (!$pluginInfo) {
            return parent::getUserChildTeams($userId);
        } else {
            return $this->___callPlugins('getUserChildTeams', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTeamNameByCustomerId($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTeamNameByCustomerId');
        if (!$pluginInfo) {
            return parent::getTeamNameByCustomerId($customerId);
        } else {
            return $this->___callPlugins('getTeamNameByCustomerId', func_get_args(), $pluginInfo);
        }
    }
}
