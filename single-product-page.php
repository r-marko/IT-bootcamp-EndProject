<?php
require_once __DIR__ . "/model/m-database.php";
require_once __DIR__  . "/model/Product.php";
require_once __DIR__ . "/lib/cartItem.php";
require_once __DIR__ . "/lib/shoppingCart.php";

include __DIR__ . "/view/_layout/header.php";

//Get single product and related products
try{
$product = array();
if(isset($_GET['single-product']) && !empty($_GET['single-product'])){
    $id = $_GET['single-product'];

    $product = \Products\Product::getOneProductById($id);
    $relatedProducts = $product->getRelatedProducts();
}

/**
 * @param integer
 */
$prevProductID = $product->getPrevProductID();
/**
 * @param integer
 */
$nextProductID = $product->getNextProductID();

}catch(\Throwable $e){$e->getMessage();}

//shopping cart
if (!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}
$quantity = 1;
if (isset($_POST['amount']) && !empty($_POST['amount']) && is_numeric($_POST['amount']) && $_POST['amount']>0){
    $quantity = $_POST['amount'];
}

if (isset($_POST['product-id'])){
$shoppingCart = new \ShoppingCart\ShoppingCart($_SESSION['cart']);
if(isset($_POST['product-id']) && !empty($_POST['product-id'])){
    $shoppingCart->addToCart(\Products\Product::getOneProductById($_POST['product-id']), $quantity);
    $shoppingCart->updateSession();
    header( "Refresh: 0" );
}
}


include __DIR__ . "/view/v-single-product.php";
include __DIR__ . "/view/_layout/footer.php";

?>