<?php
require_once('connect_to_server.php');
function signup_new_account($name, $user, $email, $pwd){
    global $db;
    $sql_cmd = "INSERT INTO user (email, name, username, password) VALUES ('$email', '$name', '$user', '$pwd')";
    $sql = mysqli_query($db, $sql_cmd);
}

function username_checker($user){
    global $db;
    $sql_cmd = "SELECT * from user where username = '$user'";
    $sql = mysqli_query($db, $sql_cmd);
    $result = mysqli_fetch_array($sql);
    if (is_array($result)) {
        return -1;
    }
    else{
        return 0;
    }
}

function username_login_checker($user, $pswd){
    global $db;
    $sql_cmd = "SELECT * from user where username = '$user' and password = '$pswd'";
    $sql = mysqli_query($db, $sql_cmd);
    $result = mysqli_fetch_array($sql);
    if (is_array($result)) {
        return 1;
    }
    else{
        return 0;
    }
}
?>