<?php
require_once __DIR__ . "/model/m-database.php";

require_once __DIR__ . "/model/Product.php";

require_once __DIR__ . "/lib/cartItem.php";

require_once __DIR__ . "/lib/shoppingCart.php";

include __DIR__ . "/view/_layout/header.php";
// set product object array $product of all available products
try{
$product = \Products\Product::getAvailableProducts(\Products\Product::getAllProducts());
} catch(\Trhrowable $e){$e->getMessage();}

// set products by price order
if (!empty($_GET['selectOrder']) && $_GET['selectOrder'] == \Products\Product::ORDER_BY_PRICE_ASC){
    try{
        $product = \Products\Product::getAvailableProducts(\Products\Product::getProductsByOrderAsc());
    }catch(\Throwable $e){$e->getMessage();}

}
if (!empty($_GET['selectOrder']) && $_GET['selectOrder'] == \Products\Product::ORDER_BY_PRICE_DSC){
    try{
        $product = \Products\Product::getAvailableProducts(\Products\Product::getProductsByOrderDsc());
    }catch(\Throwable $e){$e->getMessage();}
}

// set products by searched term

if (!empty($_GET['searchBar'])){
    $product = \Products\Product::searchProducts($product, $_GET['searchBar']);
    }





//shopping cart
if (!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}
$quantity = 1;
if (isset($_POST['amount']) && !empty($_POST['amount']) && is_numeric($_POST['amount']) && $_POST['amount']>0){
    $quantity = $_POST['amount'];
}

if (isset($_POST['addToCart'])){
$shoppingCart = new \ShoppingCart\ShoppingCart($_SESSION['cart']);
if(isset($_POST['product-id']) && !empty($_POST['product-id'])){
    $shoppingCart->addToCart(\Products\Product::getOneProductById($_POST['product-id']),$quantity);
    $shoppingCart->updateSession();
    header( "Refresh: 0" );
}
}


include_once __DIR__ . "/view/v-shop.php";

include __DIR__ . "/view/_layout/footer.php";



?>