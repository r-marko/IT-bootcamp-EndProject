<!DOCTYPE html>
<?php
session_start();
?>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Final project for IT-Bootcamp">
    <meta name="author" content="Marko Rakić">
    <title>Moto Shop</title>
    <link rel="stylesheet" href="public/theme/css/bootstrap.css">
    <link rel="icon" href="public/theme/img/layout/Moto Shop logo.png">
    <script type="text/javascript" src="public/theme/js/bootstrap.js" defer></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img width="50px" class="rounded-5" src="public/theme/img/layout/Moto Shop logo.png"></a>

      <div class="navbar-nav col-6">
        <a class="nav-link <?php if(strpos($_SERVER['REQUEST_URI'], "/ProjectEnde/")) {echo htmlspecialchars("active");} ?>" aria-current="page" href="./">Home</a>
        <a class="nav-link <?php if(strpos($_SERVER['REQUEST_URI'], "/all-products-page.php")) {echo htmlspecialchars("active");} ?>" href="./all-products-page.php">Shop</a>
        <a class="nav-link <?php if(strpos($_SERVER['REQUEST_URI'], "/about-us.php")) {echo htmlspecialchars("active");} ?>" href="./about-us.php">About Us</a>
        <a class="nav-link <?php if(strpos($_SERVER['REQUEST_URI'], "/contact-us.php")) {echo htmlspecialchars("active");} ?>" href="./contact-us.php">Contact Us</a>
        <a class="nav-link" href="shopping-cart-page.php"><img src="public/theme/img/layout/Moto-Shop-ShoppingCart.png" alt="shopping cart" width="30px">
        <span class="position-absolute top-5 start-90 translate-middle badge rounded-pill bg-danger">
          <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
          echo count($_SESSION['cart']);
          } else {
            echo "";
          }
          ?>
        </span></a>
      </div>
  </div>
</nav>
