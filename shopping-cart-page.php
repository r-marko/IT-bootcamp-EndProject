<?php
//if(empty($_SESSION['cart'])){
//    header("Location: ./all-products-page.php");
//}
require_once __DIR__ . "/model/m-database.php";
require_once __DIR__ . "/model/Product.php";
require_once __DIR__ . "/lib/cartItem.php";
require_once __DIR__ . "/lib/shoppingCart.php";
include __DIR__ . "/view/_layout/header.php";
try{
    $shoppingCart = new \ShoppingCart\ShoppingCart($_SESSION['cart']);

    //Remove from cart
    if(isset($_POST['remove']) && !empty($_POST['remove']) && is_array($_POST['remove'])){
        foreach ($_POST['remove'] as $singleProductId){
            $shoppingCart->removeProduct(\Products\Product::getOneProductById($singleProductId));
            $shoppingCart->updateSession();
            if (empty($_SESSION['cart'])){
                header("Location: ./all-products-page.php");
            }
        }
    }
    $items = $shoppingCart->getCartArr();
}catch (\Throwable $th){
    header("Location: ./");
}


include __DIR__ . "/view/v-shopping-cart.php";
include __DIR__ . "/view/_layout/footer.php";
?>