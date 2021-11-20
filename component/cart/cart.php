<link rel="stylesheet" type="text/css" href="./component/cart/cart.css" />
<div class="cart">
    <div class="cart-product">
        <div class="label">Giỏ hàng</div>
        <table>
            <thead>
                <tr>
                    <th width="5%"> </th>
                    <th width="45%">Tên</th>
                    <th width="15%">Đơn giá</th>
                    <th width="20%">Số lượng</th>
                    <th width="15%">Tạm tính</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><div class="rmv-btn"><img src="images/x-icon.png" width="100%"/></div></td>
                    <td>
                        <div class="item-img"><img src="images/product/1-1.jpg" width="100%"/></div>
                        <div class="item-name">Áo thun cổ tròn (Xanh lá)</div>
                    </td>
                    <td class="price center">185000</td>
                    <td class="center">
                        <button class="quantity-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="quantity-btn">+</button>
                    </td>
                    <td class="price center">185000</td>
                </tr>
                <tr>
                    <td><div class="rmv-btn"><img src="images/x-icon.png" width="100%"/></div></td>
                    <td>
                        <div class="item-img"><img src="images/product/2-1.jpg" width="100%"/></div>
                        <div class="item-name">Áo thun cổ tròn (Đen)</div>
                    </td>
                    <td class="price center">185000</td>
                    <td class="center">
                        <button class="quantity-btn">-</button>
                        <span class="quantity">1</span>
                        <button class="quantity-btn">+</button>
                    </td>
                    <td class="price center">185000</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="cart-cost">
        <div class="label">Địa chỉ giao hàng</div>
        <div class="cart-address">
            <p class="name">Nguyễn Hữu Trường</p>
            <p><i>0333 444 555</i></p>
            <p class="address">
                Ký túc xá Khu B ĐHQG, Thành phố Hồ Chí Minh
            </p>
            <a href="user-profile.php" class="cart-btn">Đổi địa chỉ</a>
        </div>
        <div class="label">Thanh toán</div>
        <div class="cost-name">
            <span class="float-left">Tạm tính</span>
            <span class="price float-right">370000</span>
        </div>
        <div class="cost-name">
            <span class="float-left">Phí vận chuyển</span>
            <span class="price float-right">30000</span>
        </div>
        <div class="cost-name">
            <span class="float-left"><strong>Tổng</strong></span>
            <span class="price float-right">400000</span>
        </div>
        <div class="cart-btn">Đặt hàng</div>
    </div>
</div>
<script>
formatPrice();

function formatPrice() {
    var prices = document.getElementsByClassName('price');
    for (price of prices) {
        if (!isNaN(Number(price.innerHTML))) {
            price.innerHTML = Number(price.innerHTML).toLocaleString("vi-VN", {
                style: 'currency',
                currency: 'VND'
            });
        }
    }
}
</script>