<link rel="stylesheet" type="text/css" href="./component/profile/profile.css" />
<?php
    $user = $_SESSION['user'];
    $user_info = get_user_profile($user);
    $user_carts = get_user_paid_cart($user);
    $invalid = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['update_profile'])){
            $name = $_POST['fullname'];
            $addr = $_POST['address'];
            $pnumber = $_POST['phone'];
            $gender = $_POST['gender'];
            $avatar = $_POST['avatar'];
            $invalid = false;
            if (strlen($name) <= 0) {
                $invalid = true; $errMsg = "Vui lòng nhập tên của bạn!";
            }
            else if (!preg_match("/[a-zA-Z ]+/", $name)) {
                $invalid = true; $errMsg = "Vui lòng nhập tên của bạn!";
            }
            if (!preg_match("/[a-zA-Z0-9\.]+/", $addr)) {
                $invalid = true; $errMsg = "Địa chỉ không hợp lệ.";
            }
            else if (!preg_match('/^[0-9]+$/', $pnumber) || strlen($pnumber) < 10 || strlen($pnumber) > 11) {
                $invalid = true; $errMsg = "Số điện thoại không hợp lệ.";
            }
            if(!$invalid){
                update_profile($user, $name, $addr, $pnumber, $avatar, $gender);
                echo '<script>alert("Cập nhật thành công");
                    </script>';
                header("Refresh:0");
            }
        }
        else if (isset($_POST['update_pwd'])){
            $oldPwd = $_POST['oldpwd'];
            $newPwd = $_POST['newpwd'];
            $repeatNewPwd = $_POST['repeatNewpwd'];
            $invalid = false;
            if(strlen($oldPwd) <= 0){
                $invalid = true; $errMsg = "Vui lòng nhập mật khẩu cũ!";
            }
            else if (password_checker($user, $oldPwd) == 0){
                $invalid = true; $errMsg = "Mật khẩu cũ không chính xác!";
            }
    
            if(strlen($newPwd) <= 0){
                $invalid = true; $errMsg = "Vui lòng nhập mật khẩu mới!";
            }
            else if($newPwd != $repeatNewPwd) {
                $invalid = true; $errMsg = "Mật khẩu mới và xác nhận mật khẩu không chính xác!";
            }
    
            if(!$invalid){
                update_password($user, $newPwd);
                echo '<script>alert("Cập nhật thành công, vui lòng đăng nhập lại!");
                        window.location="login.php";
                      </script>';
            }
        }
    }
    
?>
<div class="profile-container">
    <div class="profile-col-1">
        <img class="profile-avatar" src="images/<?php if($user_info['avatar'] != null) echo $user_info['avatar']; else echo "user-icon.png"; ?>" width="60%" />
        <div class="profile-username"><?php echo $user_info['name'];?></div>
        <div class="profile-email"><?php echo $user_info['email'];?></div>
        <div class="tab">
            <button class="tablinks active" onclick="switchProfileTab(0)">Cập nhật thông tin</button>
            <button class="tablinks" onclick="switchProfileTab(1)">Đổi mật khẩu</button>
            <button class="tablinks" onclick="switchProfileTab(2)">Đơn hàng</button>
            <a href="logout.php"><button class="logout-tab">Đăng xuất</button></a>
        </div>
    </div>
    <div class="profile-col-2">
        <div class="tab-content active">
            <div class="tab-name">Cập nhật thông tin</div>
            <form method="post">
                <label>Tên người dùng:</label>
                <input type="text" value="<?php echo $user_info['name'];?>" id="fullname" name="fullname" />
                <label>Địa chỉ giao hàng:</label>
                <input type="text" value="<?php echo $user_info['address'];?>" id="address" name="address" />
                <label>Số điện thoại:</label>
                <input type="text" value="<?php echo $user_info['phonenumber'];?>" id="phone" name="phone" />
                <label>Giới tính:</label><br />
                <div class="radio-group">
                    <input type="radio" value="Nam" id="male" name="gender" checked/>
                    <span class="checkmark"></span>
                    <label for="male">Nam</label>
                </div>
                <div class="radio-group">
                    <input type="radio" value="Nữ" id="female" name="gender"/>
                    <span class="checkmark"></span>
                    <label for="female">Nữ</label>
                </div><br />
                <label>Ảnh đại diện:</label>
                <input type="file" name="avatar" />
                <input type="submit" name="update_profile" value="Lưu thay đổi" class="submit-btn" />
            </form>
            <div class="error_msg">
                <?php if ($invalid) echo $errMsg ?>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-name">Đổi mật khẩu</div>
            <form method="post">
                <label>Mật khẩu cũ:</label>
                <input type="password" name="oldpwd" />
                <label>Mật khẩu mới:</label>
                <input type="password" name="newpwd" />
                <label>Nhập lại mật khẩu mới:</label>
                <input type="password" name="repeatNewpwd" />
                <input type="submit" name="update_pwd" value="Đổi mật khẩu" class="submit-btn" />
                </form>
        </div>
        <div class="tab-content">
            <div class="tab-name">Đơn hàng</div>
            <table>
                <thead>
                    <tr>
                        <th width="10%">Mã</th>
                        <th width="50%">Sản phẩm</th>
                        <th width="20%">Tổng giá</th>
                        <th width="20%">Tình trạng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($user_carts as $cart) :?>
                    <tr>
                        <td><?php echo $cart['product_id'];?></td>
                        <td><?php echo $cart['product_title'] . " x " . $cart['quantity'];?></td>
                        <td class="total-price"><?php echo $cart['total_price'];?></td>
                        <td>Đang vận chuyển</td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<script>
    function switchProfileTab(tabidx) {
        var tabs = document.getElementsByClassName('tablinks');
        for (let tab of tabs) {
            tab.classList.remove('active');
        }
        var tabcontents = document.getElementsByClassName('tab-content');
        for (let tab of tabcontents) {
            tab.classList.remove('active');
        }
        tabs[tabidx].classList.add('active');
        tabcontents[tabidx].classList.add('active');
        window.scrollTo({
            top: 170,
            behavior: 'smooth'
        });
    }
    formatTotalPrice();
    function formatTotalPrice(){
        var prices = document.getElementsByClassName('total-price');
        for (price of prices) {
            if (!isNaN(Number(price.innerHTML))){
                price.innerHTML = Number(price.innerHTML).toLocaleString("vi-VN", {
                    style: 'currency', currency: 'VND'
                });
                price.style.color = 'red';
            }
        }
    }
</script>