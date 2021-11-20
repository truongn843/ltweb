<link rel="stylesheet" type="text/css" href="./component/login/login.css" />
<?php 
    $invalid = false;
    $errMsg = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $user = $_POST['username'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $repeatPwd = $_POST['repeatPassword'];

        if (!preg_match("/[a-zA-Z0-9\.]+/", $user)) {
            $invalid = true; $errMsg = "Tên đăng nhập chỉ bao gồm chữ cái, số hoặc dấu chấm.";
        }
        else if (!preg_match("/[a-zA-Z0-9\.]+@[a-zA-Z]+\.[a-zA-Z]+/", $email)) {
            $invalid = true; $errMsg = "Email không hợp lệ.";
        }
        else if ($pwd != $repeatPwd){
            $invalid = true; $errMsg = "Mật khẩu nhập lại không khớp.";
        }

        if (!$invalid) {
            echo '<script>alert("Đăng ký thành công")</script>';
        }
    }
?>
<div class="gradient-container">
    <div class="center">
      <h1>Đăng ký</h1>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Tên đăng nhập</label>
        </div>
        <div class="txt_field">
          <input type="text" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Mật khẩu</label>
        </div>
        <div class="txt_field">
          <input type="password" name="repeatPassword" required>
          <span></span>
          <label>Nhập lại mật khẩu</label>
        </div>
        <input type="submit" value="Đăng ký">
        <div class="error_msg">
            <?php if ($invalid) echo $errMsg ?>
        </div>
        <div class="signup_link">
          Đã có tài khoản? <a href="login.php">Đăng nhập ngay</a>
        </div>
      </form>
    </div>
</div>