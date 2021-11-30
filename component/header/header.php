<link rel="stylesheet" type="text/css" href="./component/header/header.css" />
<?php 
    $avatar = "user-icon.png";
    if(!isset($_SESSION)) session_start(); 
    $loggedIn = false;
    if (isset($_SESSION['user'])){
        $loggedIn = true;
        $user = $_SESSION['user'];
        $user_profile = get_user_name_avatar($user);
        $avatar = $user_profile['avatar'];
    }

    $categories = get_categories();
?>
<div id="page-header">
    <div id="contact-bar">
        Hotline Mua Hàng: 0973 285 886 | Hotline CSKH: 1900 886 803 - Ext 1 | Email CSKH: web@hcmut.edu.vn
    </div>
    <div id="header-content">
        <a href="index.php"><img src="images/hcmut.png" alt="" id="header-logo"/></a>
        <?php 
            if (!$loggedIn) echo '<a href="login.php" class="btn-login">Đăng nhập</a>';
            else echo '<a href="logout.php" class="btn-login btn-logout">Đăng xuất</a>';
        ?>
        <a href="user-profile.php">
            <img src="images/<?php echo $avatar; ?>" alt="" id="header-user"/>
        </a>
        
        <a href="cart.php">
            <img src="images/shopping-bag.png" alt="" id="header-shopping-bag"/>
            <span id="header-num-items">
            <?php
                if(isset($_SESSION['giohang'])){
                    echo count($_SESSION['giohang']);
                }else{
                    echo 0;
                }
            ?>
            </span>
        </a>
        <form method="post" name="sform" action="/timkiem.php" id="header-search">
            <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..."/>
            <button type="submit" name="submit">Search</button>
        </form>
    </div>
    <div id="redirect-bar">
        <ul>
            <li><a href="index.php">trang chủ</a></li>
            <li class="dropdown-menu">
                <a href="index.php">sản phẩm</a>
                <div class="dropdown-content">
                    <?php foreach ($categories as $category):?>
                    <a href="category.php" onclick="location.href=this.href+'?id='+<?php echo $category['cate_id'];?>;return false;"><?php echo $category['cate_title'];?></a>
                    <?php endforeach; ?>
                </div>
            </li>
            <li><a href="about-us.php">giới thiệu</a></li>
            <li><a href="contact-us.php">liên hệ</a></li>
        </ul>
    </div>
</div>