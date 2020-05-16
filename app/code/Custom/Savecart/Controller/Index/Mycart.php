<?php

namespace Custom\Savecart\Controller\Index;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Data\Form\FormKey;
use Magento\Checkout\Model\Cart;
use Magento\Catalog\Model\Product;

class Mycart extends Action{

    protected $formKey;   
    protected $cart;
    protected $product;

    public function __construct(
        Context $context,
        FormKey $formKey,
        Cart $cart,
        Product $product) {
            $this->formKey = $formKey;
            $this->cart = $cart;
            $this->product = $product;      
            parent::__construct($context);
        }

        public function execute(){

            $productId =$data['pid'];
            $params = array(
                'form_key' => $this->formKey->getFormKey(),
                'product' => $productId, 
                'qty'   =>1
            );     

        $product = $this->product->load($productId);       
        $this->cart->addProduct($product, $params);
        $this->cart->save();

        }


}