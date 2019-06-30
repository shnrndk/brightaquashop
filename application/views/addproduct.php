</<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Add a New Product </title>
    <h1 style="font-size: 40px;text-align: center;">ENTER NEW PRODUCT DETAILS</h1>


</head>
<body>    
<div id="container">
    <form method="POST" style="margin: 40px 30px;padding: 10px;">

    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Product Id</label>
            <input type="text" class="form-control"  placeholder="Product Id" name="id" required>
        </div>
    
    
        <div class="form-group col-md-6">
            <label>Product Name</label>
            <input type="text" class="form-control"  placeholder="Product Name" name="product_name" required>
        </div>
  </div>

  <div class="form-row">
        <div class="form-group col-md-6">
            <label>Product Price</label>
            <input type="number" class="form-control"  placeholder="Product Price" name="product_price" required>
        </div>
        <div class="form-group col-md-6">
          <label>Product Description</label>
          <input type="text" class="form-control"  placeholder="Product Description" name="product_desc" required>
        </div>
  </div>

<div class="form-row">
        <div class="form-group col-md-3">
            <label>Quantity</label>
            <input type="number" class="form-control" name="quantity" placeholder="Quantity" required>
        </div>
        
        <div class="form-group col-md-4">
            <label>Brand</label>
            <input type="text" class="form-control"  placeholder="Product Brand"  name="brand" required>
        </div>

        <div class="form-group col-md-4">
            <label>Product Image</label>
            <input type="text" class="form-control"  placeholder="Product Image"  name="product_img" required>
        </div>

  </div>
  


  <div class="form-group ">
    <button type="submit" class="btn btn-success col-md-2" style="margin-top: 20px;margin-left: 40px;">Submit</button>
  </div>

    </form>

</div>
    
</body>
</html>