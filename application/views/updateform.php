<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div style='text-align: center; font-size: 45px; margin-top: 10px;'>PRODUCT UPDATE FORM</div>
<body>
  <?php
    foreach($productdetails as $values)
    {
        
            echo "<form method='POST' style='margin: 40px 30px;padding: 10px;'>
            <div class='form-row'>
                <div class='form-group col-md-6'>
                    <label>Product Name</label>";
                    echo " <input type='text' class='form-control'  value='{$values['product_name']}' name='product_name' required>";
                echo "</div>
            
            
                <div class='form-group col-md-6'>
                    <label>Product Description</label>";
                echo "<input type='text' class='form-control'  value='{$values['product_desc']}' name='product_desc' required>";
                echo "</div>
        </div>";
        echo"
        <div class='form-row'>
        <div class='form-group col-md-5'>
            <label>Product Image</label>";
            echo "<input type='text' class='form-control'  value='{$values['product_img']}' name='product_img'  required>";
        echo "</div>
                <div class='form-group col-md-2'>
                    <label>Product Quantity</label>
                    <input type='number' class='form-control' name='quantity'  value='{$values['quantity']}' required>";
                echo "</div>
                <div class='form-group col-md-1'>
                    <label>Product Price</label>";
                    echo" <input type='number' class='form-control'  value='{$values['product_price']}' name='product_price'  required>";
                echo "</div></div>";
        
        echo"
        <div class='form-group col-md-4'>";
        echo "</div>
                    <label>Brand Name</label>";
                    echo" <input type='text' class='form-control'  value='{$values['brand']}' name='brand'  required>";
                echo "</div>
            ";
    }
      ?>
  </div>
    <div class='form-group col-md-10'>
    </div> 
    <div class='form-group '>
    <button type='submit' class='btn btn-warning col-md-2'  style='margin-top:10px'>Update</button>
    </div> 
    </form> 
    

</body>
</html>
