<?php
namespace ShoppingCartItem;

class CartItem {
    protected $product;
    protected $quantity;

    public function __construct($product, $quantity){
        $this->setProduct($product);
        $this->setQuantity($quantity);
    }

    public function setProduct(\Products\Product $product){
        if (!($product instanceof \Products\Product)){
            return false;
        } 
        $this->product = $product;
        return $this;
    }
    public function setQuantity($amount){
        if (!is_numeric($amount) || $amount < 0){
            return false;
        }
        $this->quantity = $amount;
        return $this;
    }
    public function getProduct(){
        return $this->product;
    }
    public function getQuantity(){
        return $this->quantity;
    }
    public function getSum(){
        $sum = $this->getProduct()->getPrice() * $this->getQuantity();
        return $sum;
    }
}

?>