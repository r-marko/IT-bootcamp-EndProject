<?php
require_once __DIR__ . "/model/m-database.php";
require_once __DIR__ . "/model/Product.php";
require_once __DIR__ . "/lib/cartItem.php";
require_once __DIR__ . "/lib/shoppingCart.php";
include __DIR__ . "/view/_layout/header.php";
if (empty($_SESSION['cart'])){
    header("Location: ./all-products-page.php");
}


//$setUserToDb = new \Database\UserConnection();
//$setUserToDb->setTable();

$systemErrors = array();
//$indexArray = array();
try {
    $shoppingCart = new \ShoppingCart\ShoppingCart($_SESSION['cart']);
    $items = $shoppingCart->getCartArr();

    // Validation
    if(isset($_POST['buy']) && $_POST['buy'] == "ok"){

    
        $name = (string) $_POST['name'];
        $name = trim($name);
        if(empty($name)){
            $systemErrors['name'] = "Insert your name corretly!";
        }

        $last_name = (string) $_POST['last_name'];
        $last_name = trim($last_name);
        if(empty($last_name)){
            $systemErrors['last_name'] = "Insert your last name corretly!";
        }

        $email = (string) $_POST['email'];
        $email = trim($email);
        if (empty($email) || !str_contains($email, "@")){
            $systemErrors['email'] = "Insert your email corretly!";
        }

        $city = (string) $_POST['city'];
        $name = trim($city);
        if(empty($city)){
            $systemErrors['city'] = "Insert your city name corretly!";
        }

        $street = (string) $_POST['street'];
        $street = trim($street);
        if(empty($street)){
            $systemErrors['street'] = "Insert your street name corretly!";
        }

        $phone = (string) $_POST['phone'];
        $phone = trim($phone);
        if(empty($phone) || !is_numeric($phone)){
            $systemErrors['phone'] = "Insert your phone number corretly!";
        }

        $zip = (string) $_POST['zip'];
        $zip = trim($zip);
        if(empty($zip) || !is_numeric($zip)){
            $systemErrors['zip'] = "Insert your postal code corretly!";
        }
        $comment = (string) $_POST['comment'];
        $comment = trim($comment);

        if(isset($_POST['termOfUse'])){
        $rights = (string) $_POST['termOfUse'];
        if(empty($rights) || $rights != "ok") {
            $systemErrors['rights'] = "Field must be checked!";
        }
        }
        if(empty($systemErrors)) {
            //set array of Posted elemens
        //    $indexArray['name'] = $name;
         //   $indexArray['last_name'] = $last_name;
         //   $indexArray['email'] = $email;
        //    $indexArray['city'] = $city;
        //    $indexArray['street'] = $street;
         //   $indexArray['phone'] = $phone;
         //   $indexArray['zip'] = $zip;
        //    $indexArray['comment'] = $comment;
         //   $indexArray['session_array'] = serialized($items);

           // var_dump($_POST['name']);
            //var_dump($indexArray);
          //  $setUserToDb->insertIntoDb($indexArray);

            
            $_SESSION['cart'] = [];
            header('Location: ./thank-you-for-order.php');
        }
    }
} catch (\Throwable $e){
    header("Location: ./");
}



include __DIR__ . "/view/v-checkout.php";
include __DIR__ . "/view/_layout/footer.php";
?>