<?php
?>
<div class="view-product-box">
    <h2>Xem sản phẩm</h2>
    <div class="border-bottom"></div>

    <form action="" method="post">
        <div class="search-bar">
            <input type="text" id="search" placeholder="Type to search ...">
        </div>
        <table width=100%>
            <thead>
                <tr>
                    <th><input type="checkbox" id="checkAll">Check</th>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Ảnh</th>
                  
                    <th>Ngày thêm</th>
                    <th>Status</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>

            <?php
               // $all_products = mysqli_query($con, "select * from products order by product_id DESC")

               // $i = 1;
               // while($row=mysqli_fetch_array($all_products)) {
            ?>

            <tbody>
                <tr>
                    <td><input type="checkbox" name="deleteAll[]" value="<?php echo $row['product_id']; ?>"></td>
                    <td><?php //echo $i; ?></td>
                    <td><?php echo $row['product_title']; ?></td>
                    <td><?php echo $row['product_price']; ?></td>
                     <td> Image<!-- <img src="anh/ <?php echo $image[0]; ?>" width="70" height="50" > --> </td>
                    
                    <td><?php// echo $row['date']; ?></td>
                    <td>
                        <?php  ?>
                    </td>
                    <td> <a href="manager.php?action=view_product&delete_product=<?php echo $row['product_id'];?>">Xóa</a> </td>
                    <td><a href="manager.php?action=edit_product&product_id=<?php echo $row['product_id'];?>">Sửa</a></td>
                </tr>
            </tbody>
            <?php// $i++; }  //End While loop?> 

            <tr>
                <td><input type="submit" name="delete_all" value="Remove"></td>
            </tr>
        </table>


    </form>
</div>

<?php
// Delete Product -->
if (isset($_GET['delete_product'])) {
    $delete_product = mysqli_query($con, "delete from products where product_id = '$_GET[delete_product]' ");

    if ($delete_product) {
        echo "<script> alert('Sản phẩm đã được xóa thành công!') </script>";

        echo "<script> window.open('manager.php?action=view_product','_self') </script>";
    }
}

// Remove item selected using foreach loop

if (isset($_POST['deleteAll'])) {
    $remove = $_POST['deleteAll'];

    foreach ($remove as $key) {
        $run_remove = mysqli_query($con, "delete from products where product_id='$key'");

        if ($run_remove) {
            echo "<script> alert('Sản phẩm đã được xóa thành công!') </script>";

            echo "<script> window.open('manager.php?action=view_product','_self') </script>";
        }
        else {
            echo "<script> alert('Mysqli failed: mysqli_error($con)') </script>";
        }
        
    }
}


?>

