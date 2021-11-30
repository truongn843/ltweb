<!DOCTYPE html>
<html lang="en">
<?php
    require_once("query/product_function.php");
    require_once("query/profile_functions.php");
    require_once("query/cart_functions.php");
    require_once("query/new_account.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả tìm kiếm - Bach Khoa Clothes</title>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
</head>

<body>
    <?php
    include_once('component/nav-bar/nav-bar.php');
    include_once('component/header/header.php');
    ?>
    <div class="category">
        <hr /> Kết quả tìm kiếm
        <hr />
    </div>
    <?php 
    // if($products != 0) include('component/product-list/product-list.php');
    // else
    //     echo '<div class="category"><div><br><br>Không có sản phẩm nào ở đây.</div></div>'; 
    include('component/product-list/search-result-list.php');
    ?>
    
    <?php
    include_once('component/footer/footer.php');
    include_once('component/back-to-top/back-to-top.php');
    ?>
</body>

</html>