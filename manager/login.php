<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="wrapper">
  <div class="container">
    <div class="col-left">
      <div class="login-text">
        <h2>Welcome to</h2>
        <p>Admin Area</p>
      </div>
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2>Login</h2>
        <form action="" method="post" enctype="multipart/form-data">
          <p>
            <label>Username<span>*</span></label>
            <input type="text" placeholder="Username"  name ="username" required>
          </p>
          <p>
            <label>Password<span>*</span></label>
            <input type="password" placeholder="Password" name="password" required>
          </p>
          <p>
            <input type="submit" name="login" value="Sign In" />
          </p>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>



