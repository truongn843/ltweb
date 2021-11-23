<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="manager.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="navbar-header">
                <a class="admin-name" href="#">Admin Area - Hello ABC</a> 
            </div>

            <div class="navbar-right-header">
                <ul class="dropdown-navbar-right">
                    <li>
                        <a><i class="fa fa-user"> </i>&nbsp; <i class="fa fa-caret-down"></i></a>
                        <ul class="subnavbar-right">
                            <li> <a>User Account</a></li>
                            <li> <a>Logout</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="dropdown-navbar-right">
                    <li>
                        <a><i class="fa fa-bell"> </i>&nbsp; <i class="fa fa-caret-down"></i></a>
                        <ul class="subnavbar-right">
                            <li> <a>Notification</a></li>
                         
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="body-container">
            <div class="left-sidebar">
                <div class="left-sidebar-box">
                    <ul class="left-sidebar-first-level">
                        <li>
                            <a href="#"><i class="fa fa-th-large"></i>&nbsp;Products <i class="arrow fa fa-angle-left"></i></a>
                            <ul class ="left-sidebar-second-level">
                                <li><a href="manager.php?action=add_product">Add Product</a></li>
                                <li><a href="manager.php?action=view_product">View Product</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-plus"></i>&nbsp;Categories<i class="arrow fa fa-angle-left"></i></a>
                            <ul class ="left-sidebar-second-level">
                                <li><a href="manager.php?action=add_cate">Add Categories</a></li>
                                <li><a href="manager.php?action=view_cate">View Categories</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
            </div>

            <div class="content">
                <div class="content-box">
                    <?php
                        if(isset($_GET['action'])) {
                            $action = $_GET['action'];
                        }
                        else {
                            $action = '';
                        }
                        switch ($action) {
                            case 'add_product':
                                include_once 'insert_product.php';
                                break;
                            case 'view_product':
                                include_once 'view_product.php';
                                break;
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<script src ="../js/jquery-3.6.0.min.js"> 
</script>

<script>
$(document).ready(function() {
    // Drop down menu right
    $(".dropdown-navbar-right").on('click', function() {
        $(this).find(".subnavbar-right").slideToggle('fast');
    });

    // Collapse left Sidebar
    $(".left-sidebar-first-level li").on('click',this, function() {
        $(this).find(".left-sidebar-second-level").slideToggle('fast');
    });

});
</script>