<div class="form-box">
    <form action="" method="post">

    <table align="center" width="100%">
        <tr >
            <td colspan="7">
                <h2>Thêm danh mục mới</h2>
                <div class="border-bottom"></div>
            </td>
        </tr>
        <tr>
            <td><b>Tên</b></td>
            <td><input type="text" name="product-cate" size="60" required></td>
        </tr>

        

        <tr align="center">
            <td colspan="7"><input type="submit" name="insert-cate" value="Thêm"> </td>
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
            // move_uploaded_file($product_image_tmp, "anh/$product_image"); // anh là thư mục chứa ảnh

            // $insert_product = "insert into products (product_cate ....";
    //     //values ('$product_cate', '$product_title', '$product_price', '$product_desc', )

    //     $insert_pro = mysqli_query($con, $insert_product);

    //     if ($insert_pro) {
    //         echo "<script> alert('Thêm sản phẩm thành công') </script>"
    //     }
    // }
?>