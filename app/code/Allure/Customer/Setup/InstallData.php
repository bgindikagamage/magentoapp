<?php

namespace Allure\Customer\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Customer\Setup\CustomerSetupFactory;
use Magento\Customer\Model\Customer;
use Magento\Eav\Model\Entity\Attribute\Set as AttributeSet;
use Magento\Eav\Model\Entity\Attribute\SetFactory as AttributeSetFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class InstallData implements InstallDataInterface
{

    /**
     * attribute to identify customer account is active or not
     */
    const ACTIVE_ACCOUNT = 'active_account';

    /**
     * @var EavSetupFactory
     */
    private $eavSetupFactory;


    /**
     * @var CustomerSetupFactory
     */
    protected $customerSetupFactory;

    /**
     * @var AttributeSetFactory
     */
    private $attributeSetFactory;

    /**
     * @param CustomerSetupFactory $customerSetupFactory
     * @param AttributeSetFactory $attributeSetFactory
     */
    public function __construct(
        EavSetupFactory $eavSetupFactory,
        CustomerSetupFactory $customerSetupFactory,
        AttributeSetFactory $attributeSetFactory
    ) {
        $this->eavSetupFactory = $eavSetupFactory;
        $this->customerSetupFactory = $customerSetupFactory;
        $this->attributeSetFactory = $attributeSetFactory;
    }


    /**
     * {@inheritdoc}
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        /**
         *  Customer attributes
         */
        /** @var CustomerSetup $customerSetup */
        $customerSetup = $this->customerSetupFactory->create(['setup' => $setup]);

        $customerEntity = $customerSetup->getEavConfig()->getEntityType('customer');
        $attributeSetId = $customerEntity->getDefaultAttributeSetId();

        /** @var $attributeSet AttributeSet */
        $attributeSet = $this->attributeSetFactory->create();
        $attributeGroupId = $attributeSet->getDefaultGroupId($attributeSetId);


        /**
         * Create customer attribute account_active
         */
        $customerSetup->addAttribute(Customer::ENTITY, self::ACTIVE_ACCOUNT,
            [
                'type' => 'int',
                'label' => 'Active Account',
                'input' => 'select',
                "source"   => "Allure\Customer\Model\Config\Source\YesNo",
                'required' => false,
                'default' => '0',
                'visible' => true,
                'user_defined' => true,
                'sort_order' => 215,
                'position' => 215,
                'system' => false,
                
            ]);
        $active_account = $customerSetup->getEavConfig()->getAttribute(Customer::ENTITY, self::ACTIVE_ACCOUNT)
            ->addData([
                'attribute_set_id' => $attributeSetId,
                'attribute_group_id' => $attributeGroupId,
                'used_in_forms' => ['adminhtml_customer','customer_account_create','customer_account_edit'],
            ]);
        $active_account->save();

        $setup->endSetup();
    }
}