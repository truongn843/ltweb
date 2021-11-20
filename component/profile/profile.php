<link rel="stylesheet" type="text/css" href="./component/profile/profile.css" />
<div class="profile-container">
    <div class="profile-col-1">
        <img class="profile-avatar" src="images/user-icon.png" width="60%" />
        <div class="profile-username">Nguyễn Hữu Trường</div>
        <div class="profile-email">truongn843@gmail.com</div>
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
            <form>
                <label>Tên người dùng:</label>
                <input type="text" value="Nguyễn Hữu Trường" name="fullname" />
                <label>Địa chỉ giao hàng:</label>
                <input type="text" value="KTX Khu B ĐHQG, TP.HCM" name="address" />
                <label>Số điện thoại:</label>
                <input type="text" value="0333 444 555" name="phone" />
                <label>Giới tính:</label><br />
                <div class="radio-group">
                    <input type="radio" value="male" id="male" name="gender" checked />
                    <span class="checkmark"></span>
                    <label for="male">Nam</label>
                </div>
                <div class="radio-group">
                    <input type="radio" value="female" id="female" name="gender" />
                    <span class="checkmark"></span>
                    <label for="female">Nữ</label>
                </div><br />
                <label>Ảnh đại diện:</label>
                <input type="file" name="avatar" />
                <input type="submit" value="Lưu thay đổi" class="submit-btn" />
            </form>
        </div>
        <div class="tab-content">
            <div class="tab-name">Đổi mật khẩu</div>
            <form>
                <label>Mật khẩu cũ:</label>
                <input type="password" name="oldpwd" />
                <label>Mật khẩu mới:</label>
                <input type="password" name="newpwd" />
                <label>Nhập lại mật khẩu mới:</label>
                <input type="password" name="repeatNewpwd" />
                <input type="submit" value="Đổi mật khẩu" class="submit-btn" />
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
                    <tr>
                        <td>001</td>
                        <td>Áo thun cổ tròn (xanh lá) x 1</td>
                        <td class="total-price">185000</td>
                        <td>Đang vận chuyển</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>
                            Áo thun cổ tròn (xanh lá) x 1 <br/>
                            Áo thun cổ tròn (trắng) x 1
                        </td>
                        <td class="total-price">370000</td>
                        <td>Đang vận chuyển</td>
                    </tr>
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