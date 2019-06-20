</<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    
    <h1 style="font-size: 40px;text-align: center;">ENTER YOUR PAYMENT DETAILS</h1>


</head>
<body>    
    <form method="POST" style="margin: 40px 30px;padding: 10px;">

    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Address 1</label>
            <input type="text" class="form-control"  placeholder="Your Address 1" name="Address1" required>
        </div>
    
    
        <div class="form-group col-md-6">
            <label>Address 2</label>
            <input type="text" class="form-control"  placeholder="Your Address 2" name="Address2" >
        </div>
  </div>

  <div class="form-row">
        <div class="form-group col-md-6">
            <label>Total Payment</label>
            <input type="number" class="form-control" name="Totalpayment" disabled>
        </div>
        <div class="form-group col-md-6">
          <label>Postal id</label>
          <input type="text" class="form-control"  placeholder="Product Description" name="product_desc" required>
        </div>
  </div>




  <div class="form-group ">
    <button type="submit" class="btn btn-success col-md-2" style="margin-top: 20px;margin-left: 40px;">Submit</button>
  </div>

    </form>


    
</body>
</html>