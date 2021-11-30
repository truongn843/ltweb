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
    <title>Bach Khoa Clothes</title>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
</head>

<body>
    <?php
    include_once('component/nav-bar/nav-bar.php');
    include_once('component/header/header.php');
    include_once('component/banner/banner.php');
    ?>
    <?php
    if (isset($_POST['submit'])) {
        $searchValue = $_POST['search'];
        $con = new mysqli("localhost", "root", "", "db_assignment_web");
        if ($con->connect_error) {
            echo "connection Failed: " . $con->connect_error;
        } else {
            $sql = "SELECT * FROM products WHERE product_title LIKE '%$searchValue%'";
    
            $result = $con->query($sql);
            while ($row = $result->fetch_assoc()) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_price = $row['product_price'];
                $product_desc= $row['product_desc'];
                echo '<h3>' . $product_title . ': ' . '</h3>' . $product_price . '<br />' . $product_desc . '<br />';
            }
        }   
    }
    ?>
</body>

</html>