<div class="form-box">
    <form action="" method="post">

    <table align="center" width="100%">
        <tr >
            <td colspan="7">
                <h2>Add New Product</h2>
                <div class="border-bottom"></div>
            </td>
        </tr>
        <tr>
            <td><b>Product Title:</b></td>
            <td><input type="text" name="product-title" size="60" required></td>
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
                        //     echo "<option value='$cate_id'>$cate_title</option>";
                        // }
                        
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td><b>Product Image: </b> </td>
            <td><input type="file" name="product-image"></td>
        </tr>

        <tr>
            <td><b>Product Price: </b> </td>
            <td><input type="text" name="product-price" required></td>
        </tr>

        <tr>
            <td valign="top"><b>Product Description:</b></td>
            <td><textarea name="product-desc" rows="10"></textarea></td>
        </tr>

        <tr align="center">
            <td colspan="7"><input type="submit" name="insert-product" value=" Add Product"> </td>
        </tr>
    </table>
    </form>

</div>


<?php
    // if (isset($_POST['insert-product'])) {
    //     $product_title = $_POST['product-title'];
    //     $product_cate = $_POST['product-cate'];
    //     $product_price = $_POST['product-price'];
    //     $product_desc = trim(mysqli_real_escape_string($con,$_POST['product-desc'])) ;
        
    //     // get image
    //     $product_image = $_FILES['product-image']['name'];
    //     $product_image_tmp = $_FILES['product-image']['tmp_name'];

    //     //values ('$product_cate', '$product_title', '$product_price', '$product_desc', )

    //     $insert_pro = mysqli_query($con, $insert_product);

    //     if ($insert_pro) {
    //         echo "<script> alert('Thêm sản phẩm thành công') </script>"
    //     }
    // }
?>