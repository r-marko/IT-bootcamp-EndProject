<?php
require_once __DIR__ . "/model/m-database.php";
require_once __DIR__ . "/model/Product.php";

require_once __DIR__ . "/lib/cartItem.php";
require_once __DIR__ . "/lib/shoppingCart.php";

include __DIR__ . "/view/_layout/header.php";

// creating database ----run and close----
//$database = new \Database\DatabaseConnection();
//$database::create_db();

//connecting to database ----run and close----
//$database_connect = $database::connect();

//creating table into database ----run and close----
//$table = new \Database\SetProductsTable();
//$table->setTable();

// insert products into database from products-array.php ----run and close----   try to repair this database violation for key BARCODE
/*
$dbproducts = new \Database\SetProductsIntoDatabase();
$dbproducts->insertIntoDb();
*/

// fetching products from database ----run and close----
//$dbArray = new \Database\ReturnAllFromTable();
//$dbArray = $dbArray::fetchAllFromDatabaseTable("ec_products");
//var_dump($dbArray);



/*  ---TEST---
$allProducts = \Products\Product::getAllProducts();
var_dump($allProducts);
echo "<br> <hr> <br>";
*/

/*  ---TEST---
$availableProducts = \Products\Product::getAvailableProducts();
var_dump($availableProducts);
*/
/*  ---TEST---
$randomProducts = \Products\Product::getFourRandomPruducts();
var_dump($randomProducts);
*/
try{
    $randomProducts = \Products\Product::getFourRandomPruducts();
} catch (\Throwable $th){
    die("ERROR");
}

//shopping cart
if (!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}
$quantity = 1;
if (isset($_POST['amount']) && !empty($_POST['amount']) && is_numeric($_POST['amount']) && $_POST['amount']>0){
    $quantity = $_POST['amount'];
}

if (isset($_POST['submit'])){
$shoppingCart = new \ShoppingCart\ShoppingCart($_SESSION['cart']);
if(isset($_POST['product-id']) && !empty($_POST['product-id'])){
    $shoppingCart->addToCart(\Products\Product::getOneProductById($_POST['product-id']), $quantity);
    $shoppingCart->updateSession();
    header( "Refresh: 0" );
}
}


include __DIR__ . "/view/v-home.php";

include __DIR__ . "/view/_layout/footer.php";

?>