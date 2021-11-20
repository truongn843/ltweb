<link rel="stylesheet" type="text/css" href="./component/product-detail/product-detail.css" />
<?php
if (!isset($_SESSION)) session_start();
$loggedIn = false;
if (isset($_SESSION['user'])) $loggedIn = true;
?>
<div class="detail-container">
    <div class="detail-col-1">
        <div class="slideshow-container">
            <div class="slideshow-inner">
                <div class="mySlides">
                    <img src='images/product/1-1.jpg' style='width: 100%;' />
                </div>
                <div class="mySlides">
                    <img src='images/product/1-2.jpg' style='width: 100%;' />
                </div>
            </div>
            <a class="prev" onclick='plusSlides(-1)'>&#10094;</a>
            <a class="next" onclick='plusSlides(1)'>&#10095;</a>
        </div>
    </div>
    <div class="detail-col-2">
        <div class="detail-name">Áo thun cổ tròn</div>
        <form class="detail-info">
            <p><i>Chất liệu:</i> <strong> Cotton Compact 2S </strong></p>
            <p><i>Phân loại:</i> Áo thun form rộng</p>
            <p><i>Màu:</i> Xanh lá</p>
            <p><i>Size:</i>
            <div class="size-input">
                <input type="radio" id="size-s" value="S" name="size" checked />
                <label for="size-s"> S </label>
            </div>
            <div class="size-input">
                <input type="radio" id="size-m" value="M" name="size" />
                <label for="size-m"> M </label>
            </div>
            <div class="size-input">
                <input type="radio" id="size-l" value="L" name="size" />
                <label for="size-l"> L </label>
            </div>
            <div class="size-input">
                <input type="radio" id="size-xl" value="XL" name="size" />
                <label for="size-xl"> XL </label>
            </div>
            </p>
            <div class="price">185000</div>
            <input type="submit" value="Thêm vào giỏ" />
        </form>
        <div class="detail-name">Mô tả sản phẩm</div>
        <p class="detail-info">
            Áo Thun Cổ Tròn Thần Cổ Đại Angelo Ver2
            Chất liệu: Cotton Compact <br />
            Thành phần: 100% Cotton<br />
            - Thân thiện<br />
            - Thấm hút thoát ẩm<br />
            - Mềm mại<br />
            - Kiểm soát mùi<br />
            - Điều hòa nhiệt<br />
            + Họa tiết in trame + dẻo<br />
            - HDSD:<br />
            + Nên giặt chung với sản phẩm cùng màu<br />
            + Không dùng thuốc tẩy hoặc xà phòng có tính tẩy mạnh<br />
            + Nên phơi trong bóng râm để giữ sp bền màu
        </p>
        <div class="detail-name">Đánh giá</div><br />
        <?php
        if ($loggedIn) include_once('component/product-detail/review-form.php');
        else echo
            '<div class="review">
                <div class="review-avatar"><img src="images/user-icon.png" width="100%" /></div>
                <div class="review-name">Đăng nhập để gửi đánh giá</div>
                <div class="review-content"></div>
            </div>'
        ?>
        <div class="review">
            <div class="review-avatar"><img src="images/user-icon.png" width="100%" /></div>
            <div class="review-name">Nguyễn Văn A</div>
            <div class="review-content">
                <p><i>Chất lượng sản phẩm:</i> Tốt</p>
                <p>
                    Áo mặc rất đẹp, nhân viên rep nhanh. Tương lai sẽ còn mua hàng ở đây.
                </p>
            </div>
        </div>
        <div class="review">
            <div class="review-avatar"><img src="images/user-icon.png" width="100%" /></div>
            <div class="review-name">Nguyễn Văn B</div>
            <div class="review-content">
                <p><i>Chất lượng sản phẩm:</i> Tốt</p>
                <p>
                    Áo mặc rất đẹp, nhân viên rep nhanh. Tương lai sẽ còn mua hàng ở đây.
                </p>
            </div>
        </div>

    </div>
</div>
</div>

<script>
    var slideIndex = 1;

    var myTimer;

    var slideshowContainer;

    window.addEventListener("load", function() {
        showSlides(slideIndex);
        myTimer = setInterval(function() {
            plusSlides(1)
        }, 2000);

        slideshowContainer = document.getElementsByClassName('slideshow-inner')[0];
    })

    // NEXT AND PREVIOUS CONTROL
    function plusSlides(n) {
        clearInterval(myTimer);
        if (n < 0) {
            showSlides(slideIndex -= 1);
        } else {
            showSlides(slideIndex += 1);
        }

        if (n === -1) {
            myTimer = setInterval(function() {
                plusSlides(n + 2)
            }, 5000);
        } else {
            myTimer = setInterval(function() {
                plusSlides(n + 1)
            }, 5000);
        }
    }

    //Controls the current slide and resets interval if needed
    function currentSlide(n) {
        clearInterval(myTimer);
        myTimer = setInterval(function() {
            plusSlides(n + 1)
        }, 5000);
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.visibility = "hidden";
            slides[i].style.opacity = "0";
        }
        slides[slideIndex - 1].style.visibility = "visible";
        slides[slideIndex - 1].style.opacity = "1";
    }

    formatPrice();

    function formatPrice() {
        var prices = document.getElementsByClassName('price');
        for (price of prices) {
            if (!isNaN(Number(price.innerHTML))) {
                price.innerHTML = Number(price.innerHTML).toLocaleString("vi-VN", {
                    style: 'currency',
                    currency: 'VND'
                });
                price.style.color = 'red';
            }
        }
    }
</script>