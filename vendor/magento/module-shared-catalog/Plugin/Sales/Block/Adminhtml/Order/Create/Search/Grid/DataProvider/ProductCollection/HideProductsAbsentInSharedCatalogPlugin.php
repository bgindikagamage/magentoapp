<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\SharedCatalog\Plugin\Sales\Block\Adminhtml\Order\Create\Search\Grid\DataProvider\ProductCollection;

use Magento\Framework\Exception\LocalizedException;
use Magento\SharedCatalog\Model\Config;
use Magento\Sales\Block\Adminhtml\Order\Create\Search\Grid\DataProvider\ProductCollection as ProductCollectionProvider;
use Magento\Catalog\Model\ResourceModel\Product\Collection;
use Magento\SharedCatalog\Model\SharedCatalogResolver;
use Magento\Store\Model\Store;
use Magento\Store\Model\ScopeInterface;
use Magento\Backend\Model\Session\Quote;
use Magento\Customer\Model\GroupManagement;

/**
 * Plugin to filter collection with products available in shared catalog
 *
 * @SuppressWarnings(PHPMD.CookieAndSessionMisuse)
 */
class HideProductsAbsentInSharedCatalogPlugin
{
    /**
     * @var Quote
     */
    private $sessionQuote;

    /**
     * @var Config
     */
    private $config;

    /**
     * @var SharedCatalogResolver
     */
    private $sharedCatalogResolver;

    /**
     * @param Quote $sessionQuote
     * @param Config $config
     * @param SharedCatalogResolver $sharedCatalogResolver
     */
    public function __construct(
        Quote $sessionQuote,
        Config $config,
        SharedCatalogResolver $sharedCatalogResolver
    ) {
        $this->sessionQuote = $sessionQuote;
        $this->config = $config;
        $this->sharedCatalogResolver = $sharedCatalogResolver;
    }

    /**
     * Filter collection by products available in shared catalog
     *
     * @param ProductCollectionProvider $subject
     * @param Collection $result
     * @param Store $store
     * @return Collection
     * @throws LocalizedException
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterGetCollectionForStore(
        ProductCollectionProvider $subject,
        Collection $result,
        Store $store
    ):Collection {
        if ($this->config->isActive(ScopeInterface::SCOPE_STORE, $store->getId()) && !$result->isLoaded()) {
            $customer = $this->sessionQuote->getQuote()->getCustomer();
            $groupId = $customer && $customer->getId()
                ? (int) $customer->getGroupId()
                : GroupManagement::NOT_LOGGED_IN_ID;

            if (!$this->sharedCatalogResolver->isMasterCatalogAvailable($groupId)) {
                $result->joinTable(
                    ['shared_product' => $result->getTable(
                        'shared_catalog_product_item'
                    )],
                    'sku = sku',
                    ['customer_group_id'],
                    '{{table}}.customer_group_id = \'' . $groupId . '\''
                );
            }
        }
        return $result;
    }
}
