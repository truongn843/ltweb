<!DOCTYPE html>
<?php
    require_once("query/product_function.php");
    require_once("query/profile_functions.php");
    require_once("query/new_account.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
</head>
<body>
    <?php 
        // if(!isset($_SESSION)) session_start(); 
        // if (!isset($_SESSION['user'])) header("Location: login.php");
    ?>
    <?php 
        include_once('component/nav-bar/nav-bar.php');
        include_once('component/header/header.php');
        include_once('component/cart/cart.php');
        include_once('component/footer/footer.php'); 
    ?>
</body>
</html>