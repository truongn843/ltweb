<link rel="stylesheet" type="text/css" href="./component/cart/cart.css" />
<?php
    $usr = $_SESSION['user'];
    $user_carts = get_user_cart($usr);
    $user_profile = get_user_profile($usr);
    $total_price= 0;
    foreach ($user_carts as $cart){
        $total_price += $cart['total_price'];
    }
    $payment_price = $total_price - 30000;
    if($payment_price < 0)
        $payment_price = 0;
    if(isset($_POST['order'])){
        payment_cart($usr);
        echo '<script>alert("Đặt hàng thành công, vui lòng xem tình trạng đơn hàng trong profile!");
        </script>';
        header("Refresh:0");
    }
?>
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
                <?php foreach ($user_carts as $cart) :?>
                <?php $images = explode(" ", $cart['product_image']);?>
                <tr>
                    <td><div class="rmv-btn"><img src="images/x-icon.png" width="100%"/></div></td>
                    <td>
                        <div class="item-img"><img src="images/product/<?php echo $images[0];?>" width="100%"/></div>
                        <div class="item-name"><?php echo $cart['product_title'];?></div>
                    </td>
                    <td class="price center"><?php echo $cart['product_price'];?></td>
                    <td class="center">
                        <button class="quantity-btn">-</button>
                        <span class="quantity"><?php echo $cart['quantity'];?></span>
                        <button class="quantity-btn">+</button>
                    </td>
                    <td class="price center"><?php echo $cart['total_price'];?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <div class="cart-cost">
        <div class="label">Địa chỉ giao hàng</div>
        <div class="cart-address">
            <p class="name"><?php echo $user_profile['name'];?></p>
            <p><i><?php echo $user_profile['phonenumber'];?></i></p>
            <p class="address">
                <?php echo $user_profile['address'];?>
            </p>
            <a href="user-profile.php" class="cart-btn">Đổi địa chỉ</a>
        </div>
        <div class="label">Thanh toán</div>
        <div class="cost-name">
            <span class="float-left">Tạm tính</span>
            <span class="price float-right"><?php echo $total_price;?></span>
        </div>
        <div class="cost-name">
            <span class="float-left">Phí vận chuyển</span>
            <span class="price float-right">30000</span>
        </div>
        <div class="cost-name">
            <span class="float-left"><strong>Tổng</strong></span>
            <span class="price float-right"><?php echo $payment_price;?></span>
        </div>
        <button class="cart-btn" id="order" name="order">Đặt hàng</button>
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