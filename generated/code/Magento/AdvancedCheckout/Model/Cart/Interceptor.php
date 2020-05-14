<?php
namespace Magento\AdvancedCheckout\Model\Cart;

/**
 * Interceptor class for @see \Magento\AdvancedCheckout\Model\Cart
 */
class Interceptor extends \Magento\AdvancedCheckout\Model\Cart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Checkout\Model\Cart $cart, \Magento\Framework\Message\Factory $messageFactory, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\AdvancedCheckout\Helper\Data $checkoutData, \Magento\Catalog\Model\Product\OptionFactory $optionFactory, \Magento\Wishlist\Model\WishlistFactory $wishlistFactory, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Locale\FormatInterface $localeFormat, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Catalog\Model\ProductTypes\ConfigInterface $productTypeConfig, \Magento\Catalog\Model\Product\CartConfiguration $productConfiguration, \Magento\Customer\Model\Session $customerSession, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockStateInterface $stockState, \Magento\CatalogInventory\Helper\Stock $stockHelper, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Quote\Model\QuoteFactory $quoteFactory, $itemFailedStatus = 'failed_sku', array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder = null, ?\Magento\AdvancedCheckout\Model\IsProductInStockInterface $isProductInStock = null)
    {
        $this->___init();
        parent::__construct($cart, $messageFactory, $eventManager, $checkoutData, $optionFactory, $wishlistFactory, $quoteRepository, $storeManager, $localeFormat, $messageManager, $productTypeConfig, $productConfiguration, $customerSession, $stockRegistry, $stockState, $stockHelper, $productRepository, $quoteFactory, $itemFailedStatus, $data, $serializer, $searchCriteriaBuilder, $isProductInStock);
    }

    /**
     * {@inheritdoc}
     */
    public function setContext($context)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setContext');
        if (!$pluginInfo) {
            return parent::setContext($context);
        } else {
            return $this->___callPlugins('setContext', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomer($customer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomer');
        if (!$pluginInfo) {
            return parent::setCustomer($customer);
        } else {
            return $this->___callPlugins('setCustomer', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomer()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomer');
        if (!$pluginInfo) {
            return parent::getCustomer();
        } else {
            return $this->___callPlugins('getCustomer', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStore()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStore');
        if (!$pluginInfo) {
            return parent::getStore();
        } else {
            return $this->___callPlugins('getStore', func_get_args(), $pluginInfo);
        }
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
    public function setQuote(\Magento\Quote\Model\Quote $quote)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQuote');
        if (!$pluginInfo) {
            return parent::setQuote($quote);
        } else {
            return $this->___callPlugins('setQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getActualQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActualQuote');
        if (!$pluginInfo) {
            return parent::getActualQuote();
        } else {
            return $this->___callPlugins('getActualQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getQuoteSharedStoreIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuoteSharedStoreIds');
        if (!$pluginInfo) {
            return parent::getQuoteSharedStoreIds();
        } else {
            return $this->___callPlugins('getQuoteSharedStoreIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function createQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createQuote');
        if (!$pluginInfo) {
            return parent::createQuote();
        } else {
            return $this->___callPlugins('createQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveQuote($recollect = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveQuote');
        if (!$pluginInfo) {
            return parent::saveQuote($recollect);
        } else {
            return $this->___callPlugins('saveQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPreferredStoreId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPreferredStoreId');
        if (!$pluginInfo) {
            return parent::getPreferredStoreId();
        } else {
            return $this->___callPlugins('getPreferredStoreId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addProduct($product, $config = 1)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addProduct');
        if (!$pluginInfo) {
            return parent::addProduct($product, $config);
        } else {
            return $this->___callPlugins('addProduct', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reorderItem(\Magento\Sales\Model\Order\Item $orderItem, $qty = 1)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reorderItem');
        if (!$pluginInfo) {
            return parent::reorderItem($orderItem, $qty);
        } else {
            return $this->___callPlugins('reorderItem', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addProducts(array $products)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addProducts');
        if (!$pluginInfo) {
            return parent::addProducts($products);
        } else {
            return $this->___callPlugins('addProducts', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function updateQuoteItems($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateQuoteItems');
        if (!$pluginInfo) {
            return parent::updateQuoteItems($data);
        } else {
            return $this->___callPlugins('updateQuoteItems', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function moveQuoteItem($item, $moveTo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'moveQuoteItem');
        if (!$pluginInfo) {
            return parent::moveQuoteItem($item, $moveTo);
        } else {
            return $this->___callPlugins('moveQuoteItem', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function copyQuote(\Magento\Quote\Model\Quote $quote, $active = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'copyQuote');
        if (!$pluginInfo) {
            return parent::copyQuote($quote, $active);
        } else {
            return $this->___callPlugins('copyQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function updateFailedItems($failedItems, $cartItems)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateFailedItems');
        if (!$pluginInfo) {
            return parent::updateFailedItems($failedItems, $cartItems);
        } else {
            return $this->___callPlugins('updateFailedItems', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepareAddProductBySku($sku, $qty, $config = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareAddProductBySku');
        if (!$pluginInfo) {
            return parent::prepareAddProductBySku($sku, $qty, $config);
        } else {
            return $this->___callPlugins('prepareAddProductBySku', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepareAddProductsBySku(array $items)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareAddProductsBySku');
        if (!$pluginInfo) {
            return parent::prepareAddProductsBySku($items);
        } else {
            return $this->___callPlugins('prepareAddProductsBySku', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getQtyStatus(\Magento\Catalog\Model\Product $product, $requestedQty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQtyStatus');
        if (!$pluginInfo) {
            return parent::getQtyStatus($product, $requestedQty);
        } else {
            return $this->___callPlugins('getQtyStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function checkItem($sku, $qty, $config = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkItem');
        if (!$pluginInfo) {
            return parent::checkItem($sku, $qty, $config);
        } else {
            return $this->___callPlugins('checkItem', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAffectedItemConfig($sku, $config)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAffectedItemConfig');
        if (!$pluginInfo) {
            return parent::setAffectedItemConfig($sku, $config);
        } else {
            return $this->___callPlugins('setAffectedItemConfig', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAffectedItemConfig($sku)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAffectedItemConfig');
        if (!$pluginInfo) {
            return parent::getAffectedItemConfig($sku);
        } else {
            return $this->___callPlugins('getAffectedItemConfig', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveAffectedProducts(?\Magento\Checkout\Model\Cart\CartInterface $cart = null, $saveQuote = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveAffectedProducts');
        if (!$pluginInfo) {
            return parent::saveAffectedProducts($cart, $saveQuote);
        } else {
            return $this->___callPlugins('saveAffectedProducts', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAffectedItems($storeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAffectedItems');
        if (!$pluginInfo) {
            return parent::getAffectedItems($storeId);
        } else {
            return $this->___callPlugins('getAffectedItems', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSuccessfulAffectedItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSuccessfulAffectedItems');
        if (!$pluginInfo) {
            return parent::getSuccessfulAffectedItems();
        } else {
            return $this->___callPlugins('getSuccessfulAffectedItems', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAffectedItems($items, $storeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAffectedItems');
        if (!$pluginInfo) {
            return parent::setAffectedItems($items, $storeId);
        } else {
            return $this->___callPlugins('setAffectedItems', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMessages()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMessages');
        if (!$pluginInfo) {
            return parent::getMessages();
        } else {
            return $this->___callPlugins('getMessages', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFailedItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFailedItems');
        if (!$pluginInfo) {
            return parent::getFailedItems();
        } else {
            return $this->___callPlugins('getFailedItems', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function updateItemQty($sku, $qty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateItemQty');
        if (!$pluginInfo) {
            return parent::updateItemQty($sku, $qty);
        } else {
            return $this->___callPlugins('updateItemQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeAffectedItem($sku)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeAffectedItem');
        if (!$pluginInfo) {
            return parent::removeAffectedItem($sku);
        } else {
            return $this->___callPlugins('removeAffectedItem', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeAllAffectedItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeAllAffectedItems');
        if (!$pluginInfo) {
            return parent::removeAllAffectedItems();
        } else {
            return $this->___callPlugins('removeAllAffectedItems', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeSuccessItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeSuccessItems');
        if (!$pluginInfo) {
            return parent::removeSuccessItems();
        } else {
            return $this->___callPlugins('removeSuccessItems', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setSession(\Magento\Framework\Session\SessionManagerInterface $session)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSession');
        if (!$pluginInfo) {
            return parent::setSession($session);
        } else {
            return $this->___callPlugins('setSession', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSession()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSession');
        if (!$pluginInfo) {
            return parent::getSession();
        } else {
            return $this->___callPlugins('getSession', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentStore()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentStore');
        if (!$pluginInfo) {
            return parent::getCurrentStore();
        } else {
            return $this->___callPlugins('getCurrentStore', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCurrentStore($store)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCurrentStore');
        if (!$pluginInfo) {
            return parent::setCurrentStore($store);
        } else {
            return $this->___callPlugins('setCurrentStore', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        if (!$pluginInfo) {
            return parent::addData($arr);
        } else {
            return $this->___callPlugins('addData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        if (!$pluginInfo) {
            return parent::setData($key, $value);
        } else {
            return $this->___callPlugins('setData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        if (!$pluginInfo) {
            return parent::unsetData($key);
        } else {
            return $this->___callPlugins('unsetData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        if (!$pluginInfo) {
            return parent::getData($key, $index);
        } else {
            return $this->___callPlugins('getData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        if (!$pluginInfo) {
            return parent::getDataByPath($path);
        } else {
            return $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        if (!$pluginInfo) {
            return parent::getDataByKey($key);
        } else {
            return $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        if (!$pluginInfo) {
            return parent::setDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        if (!$pluginInfo) {
            return parent::getDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        if (!$pluginInfo) {
            return parent::hasData($key);
        } else {
            return $this->___callPlugins('hasData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        if (!$pluginInfo) {
            return parent::toArray($keys);
        } else {
            return $this->___callPlugins('toArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        if (!$pluginInfo) {
            return parent::convertToArray($keys);
        } else {
            return $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        if (!$pluginInfo) {
            return parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('toXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        if (!$pluginInfo) {
            return parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        if (!$pluginInfo) {
            return parent::toJson($keys);
        } else {
            return $this->___callPlugins('toJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        if (!$pluginInfo) {
            return parent::convertToJson($keys);
        } else {
            return $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        if (!$pluginInfo) {
            return parent::toString($format);
        } else {
            return $this->___callPlugins('toString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        if (!$pluginInfo) {
            return parent::__call($method, $args);
        } else {
            return $this->___callPlugins('__call', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        if (!$pluginInfo) {
            return parent::isEmpty();
        } else {
            return $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        if (!$pluginInfo) {
            return parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
        } else {
            return $this->___callPlugins('serialize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        if (!$pluginInfo) {
            return parent::debug($data, $objects);
        } else {
            return $this->___callPlugins('debug', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        if (!$pluginInfo) {
            return parent::offsetSet($offset, $value);
        } else {
            return $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        if (!$pluginInfo) {
            return parent::offsetExists($offset);
        } else {
            return $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        if (!$pluginInfo) {
            return parent::offsetUnset($offset);
        } else {
            return $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        if (!$pluginInfo) {
            return parent::offsetGet($offset);
        } else {
            return $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo);
        }
    }
}
