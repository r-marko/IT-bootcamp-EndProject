<?php
namespace ShoppingCart;
use \Products\Product;
//use ShoppingCartItem;

class ShoppingCart {

    protected $cart_arr = array();


    // od niza sesije SESSION['cart'][id, quantity] pravi niz objekata cart_arr[[new CartItem(product, quantity)]]
    public function __construct($cart_session){
        foreach ($cart_session as $single_object_cart){
            $this->cart_arr[] = new \ShoppingCartItem\CartItem(Product::getOneProductById($single_object_cart['id']), $single_object_cart['quantity']);
        }
    }

    public function getCartArr()
    {
        return $this->cart_arr;
    }

    public function addToCart($product, $quantity = 1){
        $flag = false;
        foreach ($this->cart_arr as $single_item){
            if($single_item->getProduct()->getId() == $product->getId()){
                $single_item->setQuantity($single_item->getQuantity() + $quantity);
                $flag = true;
            }
        }
        if (!$flag) {
            $this->cart_arr[] = new \ShoppingCartItem\CartItem($product, $quantity);
        }
        return $this;
    }



    public function removeProduct(Product $product){
        if($product instanceof Product){
            foreach ($this->getCartArr() as $key => $value){
                if ($value->getProduct()->id == $product->id){
                    unset($this->cart_arr[$key]);
                }
            }
        }
        return $this;
    }

    public function updateSession(){
        $_SESSION['cart'] = [];
        foreach ($this->cart_arr as $single_item){
            $_SESSION['cart'][] = [
                'id' => $single_item->getProduct()->getId(),
                'quantity' => $single_item->getQuantity()
            ];
        }
    }
}

?>