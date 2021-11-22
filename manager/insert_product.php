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
                        // code BE or list option directly
                        
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><b>Product Brand:</b></td>
            <td>
                <select name="product-cate">
                    <option>Select a Brand</option>
                    <?php

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