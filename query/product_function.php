<?php
    require_once('connect_to_server.php');
    function get_products($cate_id){
        global $db;
        $sql_cmd = "SELECT * from products where product_category = '$cate_id'";
        $sql = mysqli_query($db, $sql_cmd);
        
        $row = mysqli_num_rows($sql);
        if($row)
            return mysqli_fetch_all($sql, MYSQLI_ASSOC);
        return 0;
    }
    function get_categories(){
        global $db;
        $sql_cmd = "SELECT * from category";
        $sql = mysqli_query($db, $sql_cmd);
        return mysqli_fetch_all($sql, MYSQLI_ASSOC);
    }
    function get_category_name($id){
        global $db;
        $sql_cmd = "SELECT cate_title from category where cate_id = '$id'";
        $sql = mysqli_query($db, $sql_cmd);
        return mysqli_fetch_array($sql, MYSQLI_ASSOC);
    }
    function get_product_detail($id){
        global $db;
        $sql_cmd = "SELECT * from products where product_id = '$id'";
        $sql = mysqli_query($db, $sql_cmd);
        return mysqli_fetch_array($sql, MYSQLI_ASSOC);
    }
    function get_comment($product_id){
        global $db;
        $sql_cmd = "SELECT name, avatar, review, comment from rating r, user_profile p  where r.product_id = '$product_id' and p.username = r.username";
        $sql = mysqli_query($db, $sql_cmd);
        return mysqli_fetch_all($sql, MYSQLI_ASSOC);
    }
    function get_user_name_avatar($usr){
        global $db;
        $sql_cmd = "SELECT name, avatar from user_profile where username = '$usr'";
        $sql = mysqli_query($db, $sql_cmd);
        return mysqli_fetch_array($sql, MYSQLI_ASSOC);
    }

    function add_new_comment($usr, $product_id, $review, $cmt){
        global $db;
        $sql_cmd = "INSERT into rating (username, product_id, review, comment) values ('$usr', '$product_id', '$review', '$cmt')";
        $sql = mysqli_query($db, $sql_cmd);
        return 0;
    }
?>