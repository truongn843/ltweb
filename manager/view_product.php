
<div class="view-product-box">
    <h2>View Produc</h2>
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
                    <th>Title</th>
                    <th>Price</th>
                    <th>Image</th>
                  
                    <th>Date</th>
                    <th>Status</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>

            <?php
               // $all_products = mysqli_query($con, "select * from products order by product_id DESC")

               // $i = 1;
               // while($row=mysqli_fetch_array($all_products)) {
            ?>

            <tbody>
                <tr>
                    <td><input type="checkbox" name="deleteAll[]" value=""></td>
                    <td><?php //echo $i; ?></td>
                    <td><?php echo $row['product_title']; ?></td>
                    <td><?php echo $row['product_price']; ?></td>
                     <td> Image<!-- <img src="anh/ <?php// echo $row['product_image']; ?>" width="70" height="50" > --> </td>
                    
                    <td><?php// echo $row['date']; ?></td>
                    <td>
                        <?php  ?>
                    </td>
                    <td>Delete</td>
                    <td>Edit</td>
                </tr>
            </tbody>
            <?php// $i++; }  //End While loop?> 
        </table>


    </form>
</div>



