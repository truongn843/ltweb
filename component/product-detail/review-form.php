<?php
$user = $_SESSION['user'];
$user_info = get_user_name_avatar($user);
$invalid = false;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $product_id = intval($_GET['id']);
    $review = $_POST['quality'];
    $comment = $_POST['reviewContent'];
    $invalid = false;
    if(strlen($comment) == 0){
        $invalid = true; $errMsg = "Vui lòng nhập nhận xét của bạn.";
    }
    if(!$invalid){
        add_new_comment($user, $product_id, $review, $comment);
        echo '<script>alert("Đánh giá thành công");
            </script>';
        //header("Refresh:0");
    }
}
?>
<form class="review" method="post">
    <div class="review-avatar"><img src="images/<?php echo $user_info['avatar']; ?>" width="100%" /></div>
    <div class="review-name"><?php echo $user_info['name']; ?></div>
    <div class="review-content">
        <p><i>Chất lượng sản phẩm:</i></p>
        <div class="review-quality">
            <div class="size-input">
                <input type="radio" id="quality-5" value="Rất tốt" name="quality" checked />
                <label for="quality-5"> Rất tốt </label>
            </div>
            <div class="size-input">
                <input type="radio" id="quality-4" value="Tốt" name="quality" />
                <label for="quality-4"> Tốt </label>
            </div>
            <div class="size-input">
                <input type="radio" id="quality-3" value="Tạm" name="quality" />
                <label for="quality-3"> Tạm </label>
            </div>
            <div class="size-input">
                <input type="radio" id="quality-2" value="Tệ" name="quality" />
                <label for="quality-2"> Tệ </label>
            </div>
            <div class="size-input">
                <input type="radio" id="quality-1" value="Rất tệ" name="quality" />
                <label for="quality-1"> Rất tệ </label>
            </div>
        </div>

        <p><i>Đánh giá:</i></p>
        <textarea name="reviewContent" rows="5" placeholder="Nhập nội dung"></textarea>
        <input type="submit" value="Gửi đánh giá" />
        <div class="error_msg">
            <?php if ($invalid) echo $errMsg ?>
        </div>
    </div>
</form>