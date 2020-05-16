<?php
namespace Magento\Customer\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Customer\Api\Data\CustomerInterface
 */
interface CustomerExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\Company\Api\Data\CompanyCustomerInterface|null
     */
    public function getCompanyAttributes();

    /**
     * @param \Magento\Company\Api\Data\CompanyCustomerInterface $companyAttributes
     * @return $this
     */
    public function setCompanyAttributes(\Magento\Company\Api\Data\CompanyCustomerInterface $companyAttributes);

    /**
     * @return boolean|null
     */
    public function getIsSubscribed();

    /**
     * @param boolean $isSubscribed
     * @return $this
     */
    public function setIsSubscribed($isSubscribed);

    /**
     * @return string|null
     */
    public function getAmazonId();

    /**
     * @param string $amazonId
     * @return $this
     */
    public function setAmazonId($amazonId);

    /**
     * @return string|null
     */
    public function getVertexCustomerCode();

    /**
     * @param string $vertexCustomerCode
     * @return $this
     */
    public function setVertexCustomerCode($vertexCustomerCode);
}
