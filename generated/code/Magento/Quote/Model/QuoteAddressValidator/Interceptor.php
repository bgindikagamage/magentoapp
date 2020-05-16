<?php
namespace Magento\Quote\Model\QuoteAddressValidator;

/**
 * Interceptor class for @see \Magento\Quote\Model\QuoteAddressValidator
 */
class Interceptor extends \Magento\Quote\Model\QuoteAddressValidator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Model\Session $customerSession)
    {
        $this->___init();
        parent::__construct($addressRepository, $customerRepository, $customerSession);
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\Magento\Quote\Api\Data\AddressInterface $addressData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        if (!$pluginInfo) {
            return parent::validate($addressData);
        } else {
            return $this->___callPlugins('validate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validateForCart(\Magento\Quote\Api\Data\CartInterface $cart, \Magento\Quote\Api\Data\AddressInterface $address) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateForCart');
        if (!$pluginInfo) {
            parent::validateForCart($cart, $address);
        } else {
            $this->___callPlugins('validateForCart', func_get_args(), $pluginInfo);
        }
    }
}
