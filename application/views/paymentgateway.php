<?php
$number = (float) filter_var($sum, FILTER_SANITIZE_NUMBER_INT);
$sum = $number/100;
?>

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
            <input type="text" class="form-control" name="Totalpayment" value="<?php echo $sum?>" disabled>
        </div>
        <div class="form-group col-md-6">
          <label>Postal id</label>
          <input type="text" class="form-control"  placeholder="Your Postal id" name="Postalid" required>
        </div>
  </div>

    
  <div class="form-group ">
    <button type="submit" name="savedata" class="btn btn-success col-md-2">Submit</button>
  </div>

    </form>


    
</body>
</html>




<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="shnrndk-facilitator@gmail.com">
<input type="hidden" name="item_name_1" value="Total">
<input type="hidden" name="amount_1" value="<?php echo $sum; ?>"">
<input type="hidden" name="shipping_1" value="1.75">
<?php if(isset($_POST['Address1'])){
    echo '<input class="btn btn-success col-md-2" type="submit" value="Pay with PayPal">';
    echo '<br>Successfully Filled the Form';
    echo '<br>Please click the button Pay with Button';
}else{
    echo "Please Fill the form";
}
?>




</form>





