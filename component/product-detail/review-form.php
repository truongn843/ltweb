<form class="review">
    <div class="review-avatar"><img src="images/user-icon.png" width="100%" /></div>
    <div class="review-name">Tên người dùng</div>
    <div class="review-content">
        <p><i>Chất lượng sản phẩm:</i></p>
        <div class="review-quality">
            <div class="size-input">
                <input type="radio" id="quality-5" value="5" name="quality" checked />
                <label for="quality-5"> Rất tốt </label>
            </div>
            <div class="size-input">
                <input type="radio" id="quality-4" value="4" name="quality" />
                <label for="quality-4"> Tốt </label>
            </div>
            <div class="size-input">
                <input type="radio" id="quality-3" value="3" name="quality" />
                <label for="quality-3"> Tạm </label>
            </div>
            <div class="size-input">
                <input type="radio" id="quality-2" value="2" name="quality" />
                <label for="quality-2"> Tệ </label>
            </div>
            <div class="size-input">
                <input type="radio" id="quality-1" value="1" name="quality" />
                <label for="quality-1"> Rất tệ </label>
            </div>
        </div>

        <p><i>Đánh giá:</i></p>
        <textarea name="reviewContent" rows="5" placeholder="Nhập nội dung"></textarea>
        <input type="submit" value="Gửi đánh giá" />
    </div>
</form>