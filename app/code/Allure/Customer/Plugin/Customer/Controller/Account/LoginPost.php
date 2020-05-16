<?php

namespace Allure\Customer\Plugin\Customer\Controller\Account;
use  Magento\Customer\Model\Session;
use Magento\Framework\Data\Form\FormKey\Validator;
use Magento\Customer\Api\CustomerRepositoryInterface;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\App\Config\ScopeConfigInterface as ScopeConfig;
use Magento\Framework\App\Action\Context;
use Magento\Setup\Exception;

class LoginPost{

    const PLUGIN_ENABLED = 'customerlogin/general/enable';


    protected $session;


    protected $formKeyValidator;


    protected $customerRepositoryInterface;


    protected $messageManager;

    protected $currentCustomer;

    public function __construct(
        \Magento\Customer\Model\CustomerFactory $customerFactory,
        \Magento\Customer\Model\Customer $customers,
        Session $customerSession,
        Validator $formKeyValidator,
        CustomerRepositoryInterface $customerRepositoryInterface,

        ManagerInterface $messageManager,
        ScopeConfig $scopeConfig,
        Context $context
    )
    {
        $this->scopeConfig = $scopeConfig;
        $this->session = $customerSession;
        $this->_customerFactory = $customerFactory;
        $this->_customer = $customers;
        $this->formKeyValidator = $formKeyValidator;
        $this->customerRepositoryInterface = $customerRepositoryInterface;
        $this->messageManager = $messageManager;
        $this->resultRedirectFactory = $context->getResultRedirectFactory();
    }

    public function aroundExecute(\Magento\Customer\Controller\Account\LoginPost $loginPost, \Closure $proceed)
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        $active = $this->scopeConfig->getValue (self::PLUGIN_ENABLED, $storeScope);
        if(!$active){
            return $proceed();
            }

        if ($loginPost->getRequest()->isPost()) {
            $login = $loginPost->getRequest()->getPost('login');
            
            
            if (!empty($login['username']) && !empty($login['password'])) {

                $customer = $this->getCustomer($login['username']);

                if(!$customer){
                    return $proceed();
                }

                try {
                    if (!empty($customer->getCustomAttributes())) {
                        if ($this->isAccountNotActive($customer)) {
                            $this->messageManager->addErrorMessage(__('Your account is not Active'));

                            return $this->resultRedirectFactory->create()
                                    ->setPath('customer/account/login');

                        } else {
                            return $proceed();
                        }
                    } else {
                    
                        return $proceed();
                    }
                }
                catch (Exception $e)
                {
                    $message = "Invalid User credentials.";
                    $this->messageManager->addError($message);
                    $this->session->setUsername($login['username']);
                    return $this->resultRedirectFactory->create()
                                    ->setPath('customer/account/login');
                }

            }
            else {
               
                return $proceed();
            }
        }
        else {
            
            return $proceed();
        }
    }

    public function isAccountNotActive($customer)
    {  

        $customAttribute = $customer->getCustomAttribute('active_account');

        $this->addLog($customAttribute->getValue());
        
        
        if(empty($customAttribute)){
            return true;
        }
        $isActiveAccount = $customer->getCustomAttribute('active_account')->getValue();


        //$this->addLog($isActiveAccount);
        if($isActiveAccount)
        {
            return false;
        }
        return true;
    }
    private function getCustomer($email)
    {
        try {
            $customer = $this->customerRepositoryInterface->get($email, $websiteId = null);
            return $customer;
        }catch (Exception $e)
        {
             // $e->getMessage();
        }
    }
    public function addLog($message)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . "/var/log/sagar.log");
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);

        $logger->info ($message);

    }
}