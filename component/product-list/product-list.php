<link rel="stylesheet" type="text/css" href="./component/product-list/product-list.css" />
<div id="product-container">
    <a class="product-card" href="detail.php">
        <img src="images/product/1-1.jpg" width=100%/>
        <div class="product-name">Áo thun cổ tròn</div>
        <div class="product-price">185000</div>
    </a>
    <a class="product-card" href="detail.php">
        <img src="images/product/2-1.jpg" width=100%/>
        <div class="product-name">Áo thun cổ tròn</div>
        <div class="product-price">185000</div>
    </a>
    <a class="product-card" href="detail.php">
        <img src="images/product/3-1.jpg" width=100%/>
        <div class="product-name">Áo thun cổ tròn</div>
        <div class="product-price">185000</div>
    </a>
    <a class="product-card" href="detail.php">
        <img src="images/product/4-1.jpg" width=100%/>
        <div class="product-name">Áo thun cổ tròn</div>
        <div class="product-price">185000</div>
    </a>
</div>

<script>
    formatPrice();
    function formatPrice()
    {
        var prices = document.getElementsByClassName('product-price');
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