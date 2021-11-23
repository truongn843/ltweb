<?php
    $edit_product = mysqli_query($con, "select * from products where product_id='$_GET[product_id]'");
    $fetch_edit = mysqli_fetch_array($edit_product);
?>

<div class="form-box">
    <form action="" method="post">

    <table align="center" width="100%">
        <tr >
            <td colspan="7">
                <h2>Sửa sản phẩm</h2>
                <div class="border-bottom"></div>
            </td>
        </tr>
        <tr>
            <td><b>Product Title:</b></td>
            <td><input type="text" name="product-title" value ="<?php echo $fetch_edit['product_title']; ?>" size="60" required></td>
        </tr>

        <tr>
            <td><b>Product Category</b></td>
            <td>
                <select name="product-cate">
                    <option>Select a category</option>
                    <?php
                        // code BE to get all categories
                        // $get_cate = "select * from table_name";
                        // $run_cate = mysqli_query($con, $get_cate);
                        // while($row_cate = mysqli_fetch_array($run_cate)) {
                        //     $cate_id = $row_cate['cate_id'];
                        //     $cate_title = $row_cate['cate_title'];

                        // get category of selected item
                        // if ($fetch_edit['product_cate'] == $cate_id) {
                        //     echo "<option value='$fetch_edit[product_cate]' selected>$cate_title</option>";
                        // }
                        // else {
                        //     echo "<option value='$cate_id'>$cate_title</option>";
                        // }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td valign=top><b>Product Image: </b> </td>
            <td>
                <input type="file" name="product-image">
                <div class="edit_image">
                    <img src="anh/<?php echo $fetch_edit['product_image']; ?>" width ="100" height = "70">
                </div>
            </td>
        </tr>

        <tr>
            <td><b>Product Price: </b> </td>
            <td><input type="text" name="product-price"  value="<?php echo $fetch_edit['product_price']; ?>" required></td>
        </tr>

        <tr>
            <td valign="top"><b>Product Description:</b></td>
            <td><textarea name="product-desc" rows="10"><?php echo $fetch_edit['product_desc']; ?> </textarea></td>
        </tr>

        <tr align="center">
            <td colspan="7"><input type="submit" name="edit-product" value="Save"> </td>
        </tr>
    </table>
    </form>

</div>


<?php
    if (isset($_POST['edit-product'])) {
        $product_title = trim(mysqli_real_escape_string($con,$_POST['product-title'])) ;
        $product_cate = $_POST['product-cate'];
        $product_price = $_POST['product-price'];
        $product_desc = trim(mysqli_real_escape_string($con,$_POST['product-desc'])) ;
        
        // get image
        $product_image = $_FILES['product-image']['name'];
        $product_image_tmp = $_FILES['product-image']['tmp_name'];

        // code BE goes on

        move_uploaded_file($product_image_tmp, "anh/$product_image"); // anh là thư mục chứa ảnh


        
    }
?>