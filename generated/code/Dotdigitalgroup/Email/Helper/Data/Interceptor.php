<?php
namespace Dotdigitalgroup\Email\Helper\Data;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Helper\Data
 */
class Interceptor extends \Dotdigitalgroup\Email\Helper\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ProductMetadata $productMetadata, \Dotdigitalgroup\Email\Model\ContactFactory $contactFactory, \Dotdigitalgroup\Email\Model\ResourceModel\Contact $contactResource, \Magento\Config\Model\ResourceModel\Config $resourceConfig, \Magento\Framework\App\ResourceConnection $adapter, \Magento\Framework\App\Helper\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Framework\Module\ModuleListInterface $moduleListInterface, \Magento\Store\Model\Store $store, \Magento\Framework\App\Config\Storage\Writer $writer, \Dotdigitalgroup\Email\Model\Apiconnector\ClientFactory $clientFactory, \Dotdigitalgroup\Email\Helper\ConfigFactory $configHelperFactory, \Dotdigitalgroup\Email\Model\Config\Json $serializer, \Magento\Framework\Stdlib\DateTime\DateTime $dateTime, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone, \Dotdigitalgroup\Email\Model\DateIntervalFactory $dateIntervalFactory, \Magento\Quote\Model\ResourceModel\Quote $quoteResource, \Magento\Quote\Model\QuoteFactory $quoteFactory, \Magento\User\Model\ResourceModel\User $userResource, \Dotdigitalgroup\Email\Logger\Logger $logger, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Framework\App\Config\ReinitableConfigInterface $reinitableConfig)
    {
        $this->___init();
        parent::__construct($productMetadata, $contactFactory, $contactResource, $resourceConfig, $adapter, $context, $storeManager, $customerFactory, $moduleListInterface, $store, $writer, $clientFactory, $configHelperFactory, $serializer, $dateTime, $timezone, $dateIntervalFactory, $quoteResource, $quoteFactory, $userResource, $logger, $request, $encryptor, $reinitableConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function saveApiCredentials(string $apiUsername, string $apiPassword, ?string $apiEndpoint, $website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveApiCredentials');
        if (!$pluginInfo) {
            return parent::saveApiCredentials($apiUsername, $apiPassword, $apiEndpoint, $website);
        } else {
            return $this->___callPlugins('saveApiCredentials', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveChatApiSpaceIdAndToken(string $apiSpaceId, string $token, $website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveChatApiSpaceIdAndToken');
        if (!$pluginInfo) {
            return parent::saveChatApiSpaceIdAndToken($apiSpaceId, $token, $website);
        } else {
            return $this->___callPlugins('saveChatApiSpaceIdAndToken', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function enableEngagementCloud($website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'enableEngagementCloud');
        if (!$pluginInfo) {
            return parent::enableEngagementCloud($website);
        } else {
            return $this->___callPlugins('enableEngagementCloud', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reinitialiseConfig()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reinitialiseConfig');
        if (!$pluginInfo) {
            return parent::reinitialiseConfig();
        } else {
            return $this->___callPlugins('reinitialiseConfig', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled($website = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEnabled');
        if (!$pluginInfo) {
            return parent::isEnabled($website);
        } else {
            return $this->___callPlugins('isEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isStoreEnabled($storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isStoreEnabled');
        if (!$pluginInfo) {
            return parent::isStoreEnabled($storeId);
        } else {
            return $this->___callPlugins('isStoreEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStores($default = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStores');
        if (!$pluginInfo) {
            return parent::getStores($default);
        } else {
            return $this->___callPlugins('getStores', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function auth($authRequest)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'auth');
        if (!$pluginInfo) {
            return parent::auth($authRequest);
        } else {
            return $this->___callPlugins('auth', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isIpAllowed()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isIpAllowed');
        if (!$pluginInfo) {
            return parent::isIpAllowed();
        } else {
            return $this->___callPlugins('isIpAllowed', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigValue($path, $contextScope = 'default', $contextScopeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigValue');
        if (!$pluginInfo) {
            return parent::getConfigValue($path, $contextScope, $contextScopeId);
        } else {
            return $this->___callPlugins('getConfigValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMappedCustomerId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMappedCustomerId');
        if (!$pluginInfo) {
            return parent::getMappedCustomerId();
        } else {
            return $this->___callPlugins('getMappedCustomerId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMappedOrderId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMappedOrderId');
        if (!$pluginInfo) {
            return parent::getMappedOrderId();
        } else {
            return $this->___callPlugins('getMappedOrderId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsite()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsite');
        if (!$pluginInfo) {
            return parent::getWebsite();
        } else {
            return $this->___callPlugins('getWebsite', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsiteById($websiteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsiteById');
        if (!$pluginInfo) {
            return parent::getWebsiteById($websiteId);
        } else {
            return $this->___callPlugins('getWebsiteById', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsiteForSelectedScopeInAdmin()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsiteForSelectedScopeInAdmin');
        if (!$pluginInfo) {
            return parent::getWebsiteForSelectedScopeInAdmin();
        } else {
            return $this->___callPlugins('getWebsiteForSelectedScopeInAdmin', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPasscode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPasscode');
        if (!$pluginInfo) {
            return parent::getPasscode();
        } else {
            return $this->___callPlugins('getPasscode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveConfigData($path, $value, $scope, $scopeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveConfigData');
        if (!$pluginInfo) {
            return parent::saveConfigData($path, $value, $scope, $scopeId);
        } else {
            return $this->___callPlugins('saveConfigData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteConfigData($path, $scope, $scopeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteConfigData');
        if (!$pluginInfo) {
            return parent::deleteConfigData($path, $scope, $scopeId);
        } else {
            return $this->___callPlugins('deleteConfigData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function disableTransactionalDataConfig($scope, $scopeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'disableTransactionalDataConfig');
        if (!$pluginInfo) {
            return parent::disableTransactionalDataConfig($scope, $scopeId);
        } else {
            return $this->___callPlugins('disableTransactionalDataConfig', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLastOrderId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastOrderId');
        if (!$pluginInfo) {
            return parent::getLastOrderId();
        } else {
            return $this->___callPlugins('getLastOrderId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function log($data, $extra = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'log');
        if (!$pluginInfo) {
            return parent::log($data, $extra);
        } else {
            return $this->___callPlugins('log', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function debug($message, $extra = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        if (!$pluginInfo) {
            return parent::debug($message, $extra);
        } else {
            return $this->___callPlugins('debug', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function error($message, $extra = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'error');
        if (!$pluginInfo) {
            return parent::error($message, $extra);
        } else {
            return $this->___callPlugins('error', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isDebugEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDebugEnabled');
        if (!$pluginInfo) {
            return parent::isDebugEnabled();
        } else {
            return $this->___callPlugins('isDebugEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isPageTrackingEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPageTrackingEnabled');
        if (!$pluginInfo) {
            return parent::isPageTrackingEnabled();
        } else {
            return $this->___callPlugins('isPageTrackingEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isRoiTrackingEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isRoiTrackingEnabled');
        if (!$pluginInfo) {
            return parent::isRoiTrackingEnabled();
        } else {
            return $this->___callPlugins('isRoiTrackingEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMappedStoreName(\Magento\Store\Model\Website $website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMappedStoreName');
        if (!$pluginInfo) {
            return parent::getMappedStoreName($website);
        } else {
            return $this->___callPlugins('getMappedStoreName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getContactId($email, $websiteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getContactId');
        if (!$pluginInfo) {
            return parent::getContactId($email, $websiteId);
        } else {
            return $this->___callPlugins('getContactId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrCreateContact($email, $websiteId, $contactFromTable = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrCreateContact');
        if (!$pluginInfo) {
            return parent::getOrCreateContact($email, $websiteId, $contactFromTable);
        } else {
            return $this->___callPlugins('getOrCreateContact', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSuppressedContacts($website, $intervalSpec = 'PT24H')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSuppressedContacts');
        if (!$pluginInfo) {
            return parent::getSuppressedContacts($website, $intervalSpec);
        } else {
            return $this->___callPlugins('getSuppressedContacts', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsiteApiClient($website = 0, $username = '', $password = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsiteApiClient');
        if (!$pluginInfo) {
            return parent::getWebsiteApiClient($website, $username, $password);
        } else {
            return $this->___callPlugins('getWebsiteApiClient', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getApiEndpoint($websiteId, $client)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getApiEndpoint');
        if (!$pluginInfo) {
            return parent::getApiEndpoint($websiteId, $client);
        } else {
            return $this->___callPlugins('getApiEndpoint', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getApiEndPointFromApi($client)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getApiEndPointFromApi');
        if (!$pluginInfo) {
            return parent::getApiEndPointFromApi($client);
        } else {
            return $this->___callPlugins('getApiEndPointFromApi', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getApiEndPointFromConfig($websiteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getApiEndPointFromConfig');
        if (!$pluginInfo) {
            return parent::getApiEndPointFromConfig($websiteId);
        } else {
            return $this->___callPlugins('getApiEndPointFromConfig', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveApiEndpoint($apiEndpoint, $websiteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveApiEndpoint');
        if (!$pluginInfo) {
            return parent::saveApiEndpoint($apiEndpoint, $websiteId);
        } else {
            return $this->___callPlugins('saveApiEndpoint', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getApiUsername($website = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getApiUsername');
        if (!$pluginInfo) {
            return parent::getApiUsername($website);
        } else {
            return $this->___callPlugins('getApiUsername', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getApiPassword($website = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getApiPassword');
        if (!$pluginInfo) {
            return parent::getApiPassword($website);
        } else {
            return $this->___callPlugins('getApiPassword', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerAddressBook($website = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerAddressBook');
        if (!$pluginInfo) {
            return parent::getCustomerAddressBook($website);
        } else {
            return $this->___callPlugins('getCustomerAddressBook', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSubscriberAddressBook($website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSubscriberAddressBook');
        if (!$pluginInfo) {
            return parent::getSubscriberAddressBook($website);
        } else {
            return $this->___callPlugins('getSubscriberAddressBook', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getGuestAddressBook($website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGuestAddressBook');
        if (!$pluginInfo) {
            return parent::getGuestAddressBook($website);
        } else {
            return $this->___callPlugins('getGuestAddressBook', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsites($default = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsites');
        if (!$pluginInfo) {
            return parent::getWebsites($default);
        } else {
            return $this->___callPlugins('getWebsites', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAttributes($website = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAttributes');
        if (!$pluginInfo) {
            return parent::getCustomAttributes($website);
        } else {
            return $this->___callPlugins('getCustomAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRedirectUri()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRedirectUri');
        if (!$pluginInfo) {
            return parent::getRedirectUri();
        } else {
            return $this->___callPlugins('getRedirectUri', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigSelectedStatus($website = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigSelectedStatus');
        if (!$pluginInfo) {
            return parent::getConfigSelectedStatus($website);
        } else {
            return $this->___callPlugins('getConfigSelectedStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsiteConfig($path, $website = 0, $scope = 'website')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsiteConfig');
        if (!$pluginInfo) {
            return parent::getWebsiteConfig($path, $website, $scope);
        } else {
            return $this->___callPlugins('getWebsiteConfig', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigSelectedCustomOrderAttributes($website = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigSelectedCustomOrderAttributes');
        if (!$pluginInfo) {
            return parent::getConfigSelectedCustomOrderAttributes($website);
        } else {
            return $this->___callPlugins('getConfigSelectedCustomOrderAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setConnectorContactToReImport($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setConnectorContactToReImport');
        if (!$pluginInfo) {
            return parent::setConnectorContactToReImport($customerId);
        } else {
            return $this->___callPlugins('setConnectorContactToReImport', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function disableConfigForWebsite($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'disableConfigForWebsite');
        if (!$pluginInfo) {
            return parent::disableConfigForWebsite($path);
        } else {
            return $this->___callPlugins('disableConfigForWebsite', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomersWithDuplicateEmails()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomersWithDuplicateEmails');
        if (!$pluginInfo) {
            return parent::getCustomersWithDuplicateEmails();
        } else {
            return $this->___callPlugins('getCustomersWithDuplicateEmails', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function generateDynamicUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'generateDynamicUrl');
        if (!$pluginInfo) {
            return parent::generateDynamicUrl();
        } else {
            return $this->___callPlugins('generateDynamicUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderTableDescription()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrderTableDescription');
        if (!$pluginInfo) {
            return parent::getOrderTableDescription();
        } else {
            return $this->___callPlugins('getOrderTableDescription', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEasyEmailCaptureEnabled($websiteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEasyEmailCaptureEnabled');
        if (!$pluginInfo) {
            return parent::isEasyEmailCaptureEnabled($websiteId);
        } else {
            return $this->___callPlugins('isEasyEmailCaptureEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEasyEmailCaptureForNewsletterEnabled($websiteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEasyEmailCaptureForNewsletterEnabled');
        if (!$pluginInfo) {
            return parent::isEasyEmailCaptureForNewsletterEnabled($websiteId);
        } else {
            return $this->___callPlugins('isEasyEmailCaptureForNewsletterEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFeefoLogon()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFeefoLogon');
        if (!$pluginInfo) {
            return parent::getFeefoLogon();
        } else {
            return $this->___callPlugins('getFeefoLogon', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFeefoReviewsPerProduct()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFeefoReviewsPerProduct');
        if (!$pluginInfo) {
            return parent::getFeefoReviewsPerProduct();
        } else {
            return $this->___callPlugins('getFeefoReviewsPerProduct', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFeefoLogoTemplate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFeefoLogoTemplate');
        if (!$pluginInfo) {
            return parent::getFeefoLogoTemplate();
        } else {
            return $this->___callPlugins('getFeefoLogoTemplate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function updateDataFields($email, $website, $storeName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateDataFields');
        if (!$pluginInfo) {
            return parent::updateDataFields($email, $website, $storeName);
        } else {
            return $this->___callPlugins('updateDataFields', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function updateLastQuoteId($quoteId, $email, $websiteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateLastQuoteId');
        if (!$pluginInfo) {
            return parent::updateLastQuoteId($quoteId, $email, $websiteId);
        } else {
            return $this->___callPlugins('updateLastQuoteId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLastQuoteId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastQuoteId');
        if (!$pluginInfo) {
            return parent::getLastQuoteId();
        } else {
            return $this->___callPlugins('getLastQuoteId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isOrderSyncEnabled($websiteId = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isOrderSyncEnabled');
        if (!$pluginInfo) {
            return parent::isOrderSyncEnabled($websiteId);
        } else {
            return $this->___callPlugins('isOrderSyncEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isCatalogSyncEnabled($websiteId = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCatalogSyncEnabled');
        if (!$pluginInfo) {
            return parent::isCatalogSyncEnabled($websiteId);
        } else {
            return $this->___callPlugins('isCatalogSyncEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isCustomerSyncEnabled($website = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCustomerSyncEnabled');
        if (!$pluginInfo) {
            return parent::isCustomerSyncEnabled($website);
        } else {
            return $this->___callPlugins('isCustomerSyncEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSyncLimit($website = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSyncLimit');
        if (!$pluginInfo) {
            return parent::getSyncLimit($website);
        } else {
            return $this->___callPlugins('getSyncLimit', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isGuestSyncEnabled($websiteId = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isGuestSyncEnabled');
        if (!$pluginInfo) {
            return parent::isGuestSyncEnabled($websiteId);
        } else {
            return $this->___callPlugins('isGuestSyncEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isSubscriberSyncEnabled($websiteId = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSubscriberSyncEnabled');
        if (!$pluginInfo) {
            return parent::isSubscriberSyncEnabled($websiteId);
        } else {
            return $this->___callPlugins('isSubscriberSyncEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsiteCustomerMappingDatafields($website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsiteCustomerMappingDatafields');
        if (!$pluginInfo) {
            return parent::getWebsiteCustomerMappingDatafields($website);
        } else {
            return $this->___callPlugins('getWebsiteCustomerMappingDatafields', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAutomationIdByType($automationType, $storeId = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAutomationIdByType');
        if (!$pluginInfo) {
            return parent::getAutomationIdByType($automationType, $storeId);
        } else {
            return $this->___callPlugins('getAutomationIdByType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function updateAbandonedProductName($name, $email, $websiteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateAbandonedProductName');
        if (!$pluginInfo) {
            return parent::updateAbandonedProductName($name, $email, $websiteId);
        } else {
            return $this->___callPlugins('updateAbandonedProductName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAbandonedProductName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAbandonedProductName');
        if (!$pluginInfo) {
            return parent::getAbandonedProductName();
        } else {
            return $this->___callPlugins('getAbandonedProductName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getApiResponseTimeLimit($websiteId = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getApiResponseTimeLimit');
        if (!$pluginInfo) {
            return parent::getApiResponseTimeLimit($websiteId);
        } else {
            return $this->___callPlugins('getApiResponseTimeLimit', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEmailCaptureUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEmailCaptureUrl');
        if (!$pluginInfo) {
            return parent::getEmailCaptureUrl();
        } else {
            return $this->___callPlugins('getEmailCaptureUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getReviewReminderAnchor($website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getReviewReminderAnchor');
        if (!$pluginInfo) {
            return parent::getReviewReminderAnchor($website);
        } else {
            return $this->___callPlugins('getReviewReminderAnchor', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getReviewDisplayType($website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getReviewDisplayType');
        if (!$pluginInfo) {
            return parent::getReviewDisplayType($website);
        } else {
            return $this->___callPlugins('getReviewDisplayType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getReviewWebsiteSettings($path, $website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getReviewWebsiteSettings');
        if (!$pluginInfo) {
            return parent::getReviewWebsiteSettings($path, $website);
        } else {
            return $this->___callPlugins('getReviewWebsiteSettings', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderStatus($website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrderStatus');
        if (!$pluginInfo) {
            return parent::getOrderStatus($website);
        } else {
            return $this->___callPlugins('getOrderStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDelay($website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDelay');
        if (!$pluginInfo) {
            return parent::getDelay($website);
        } else {
            return $this->___callPlugins('getDelay', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isNewProductOnly($website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isNewProductOnly');
        if (!$pluginInfo) {
            return parent::isNewProductOnly($website);
        } else {
            return $this->___callPlugins('isNewProductOnly', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCampaign($website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCampaign');
        if (!$pluginInfo) {
            return parent::getCampaign($website);
        } else {
            return $this->___callPlugins('getCampaign', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAnchor($website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAnchor');
        if (!$pluginInfo) {
            return parent::getAnchor($website);
        } else {
            return $this->___callPlugins('getAnchor', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDisplayType($website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDisplayType');
        if (!$pluginInfo) {
            return parent::getDisplayType($website);
        } else {
            return $this->___callPlugins('getDisplayType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isFrontendAdminSecure()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isFrontendAdminSecure');
        if (!$pluginInfo) {
            return parent::isFrontendAdminSecure();
        } else {
            return $this->___callPlugins('isFrontendAdminSecure', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConnectorVersion()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConnectorVersion');
        if (!$pluginInfo) {
            return parent::getConnectorVersion();
        } else {
            return $this->___callPlugins('getConnectorVersion', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAbandonedCartLimit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAbandonedCartLimit');
        if (!$pluginInfo) {
            return parent::getAbandonedCartLimit();
        } else {
            return $this->___callPlugins('getAbandonedCartLimit', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDateLastCronRun($cronJob)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDateLastCronRun');
        if (!$pluginInfo) {
            return parent::getDateLastCronRun($cronJob);
        } else {
            return $this->___callPlugins('getDateLastCronRun', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsiteSalesDataFields($website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsiteSalesDataFields');
        if (!$pluginInfo) {
            return parent::getWebsiteSalesDataFields($website);
        } else {
            return $this->___callPlugins('getWebsiteSalesDataFields', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validateDateRange($dateFrom, $dateTo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateDateRange');
        if (!$pluginInfo) {
            return parent::validateDateRange($dateFrom, $dateTo);
        } else {
            return $this->___callPlugins('validateDateRange', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validateDate($date)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateDate');
        if (!$pluginInfo) {
            return parent::validateDate($date);
        } else {
            return $this->___callPlugins('validateDate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDateDifference($created)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDateDifference');
        if (!$pluginInfo) {
            return parent::getDateDifference($created);
        } else {
            return $this->___callPlugins('getDateDifference', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isCodeValid($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCodeValid');
        if (!$pluginInfo) {
            return parent::isCodeValid($code);
        } else {
            return $this->___callPlugins('isCodeValid', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setRefreshTokenForUser($adminUser, $token)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRefreshTokenForUser');
        if (!$pluginInfo) {
            return parent::setRefreshTokenForUser($adminUser, $token);
        } else {
            return $this->___callPlugins('setRefreshTokenForUser', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getQuoteAllItemsFor($quoteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuoteAllItemsFor');
        if (!$pluginInfo) {
            return parent::getQuoteAllItemsFor($quoteId);
        } else {
            return $this->___callPlugins('getQuoteAllItemsFor', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBrandAttributeByWebsiteId($websiteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBrandAttributeByWebsiteId');
        if (!$pluginInfo) {
            return parent::getBrandAttributeByWebsiteId($websiteId);
        } else {
            return $this->___callPlugins('getBrandAttributeByWebsiteId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCanShowAdditionalSubscriptions($website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCanShowAdditionalSubscriptions');
        if (!$pluginInfo) {
            return parent::getCanShowAdditionalSubscriptions($website);
        } else {
            return $this->___callPlugins('getCanShowAdditionalSubscriptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCanShowDataFields($website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCanShowDataFields');
        if (!$pluginInfo) {
            return parent::getCanShowDataFields($website);
        } else {
            return $this->___callPlugins('getCanShowDataFields', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAddressBookIdsToShow($website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddressBookIdsToShow');
        if (!$pluginInfo) {
            return parent::getAddressBookIdsToShow($website);
        } else {
            return $this->___callPlugins('getAddressBookIdsToShow', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRegionPrefix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRegionPrefix');
        if (!$pluginInfo) {
            return parent::getRegionPrefix();
        } else {
            return $this->___callPlugins('getRegionPrefix', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPageTrackingUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageTrackingUrl');
        if (!$pluginInfo) {
            return parent::getPageTrackingUrl();
        } else {
            return $this->___callPlugins('getPageTrackingUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPageTrackingUrlForSuccessPage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageTrackingUrlForSuccessPage');
        if (!$pluginInfo) {
            return parent::getPageTrackingUrlForSuccessPage();
        } else {
            return $this->___callPlugins('getPageTrackingUrlForSuccessPage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isOnlySubscribersForAC($storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isOnlySubscribersForAC');
        if (!$pluginInfo) {
            return parent::isOnlySubscribersForAC($storeId);
        } else {
            return $this->___callPlugins('isOnlySubscribersForAC', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isOnlySubscribersForReview($websiteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isOnlySubscribersForReview');
        if (!$pluginInfo) {
            return parent::isOnlySubscribersForReview($websiteId);
        } else {
            return $this->___callPlugins('isOnlySubscribersForReview', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isOnlySubscribersForContactSync($websiteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isOnlySubscribersForContactSync');
        if (!$pluginInfo) {
            return parent::isOnlySubscribersForContactSync($websiteId);
        } else {
            return $this->___callPlugins('isOnlySubscribersForContactSync', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getScopeConfig()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getScopeConfig');
        if (!$pluginInfo) {
            return parent::getScopeConfig();
        } else {
            return $this->___callPlugins('getScopeConfig', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getContactByEmail($email, $websiteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getContactByEmail');
        if (!$pluginInfo) {
            return parent::getContactByEmail($email, $websiteId);
        } else {
            return $this->___callPlugins('getContactByEmail', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveContact($contact)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveContact');
        if (!$pluginInfo) {
            return parent::saveContact($contact);
        } else {
            return $this->___callPlugins('saveContact', func_get_args(), $pluginInfo);
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
