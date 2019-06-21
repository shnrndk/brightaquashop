</<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
    </script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Add a New Product </title>

    <script>
        $(document).ready(function(e){
            $(".dropdown-trigger").dropdown();

            $('.carousel.carousel-slider').carousel({
                fullWidth: true,
                indicators: true
            });

            $(document).ready(function(){
                $('.parallax').parallax()
            });

            $(document).ready(function(){
                 $('.carousel').carousel();
                 indicators:true;
                 fullWidth:true;
            });

            $(document).ready(function(){
                $('.materialboxed').materialbox();
            });

        
        });

        
    </script>

    <ul id="dropdown1" class="dropdown-content ">    
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
    </ul>

    <div class="navbar-fixed">
    <nav class="blue z-depth-3">
        
        <div class="nav-wrapper container blue ">
        <a href="#!" class="brand-logo black-text text-darken-2">BrightAqua</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="<?php echo site_url('/') ?>" class="black-text text-darken-2">Home<i class="material-icons right">home</i></a></li>
            <li><a href="<?php echo site_url('/contact') ?>" class="black-text text-darken-2">Contact Us<i class="material-icons right">call</i></a></li>
            <!-- Dropdown Trigger -->
            <li><a href="<?php echo base_url('/products') ?>" class="black-text text-darken-2">Products<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="<?php echo site_url('/cart') ?>" class="black-text text-darken-2">Cart<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="<?php echo site_url('/dashboard') ?>" class="black-text text-darken-2">Admin<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        </div>
    
    </nav>
</div>    

    <h1 style="font-size: 40px;text-align: center;">ENTER NEW PRODUCT DETAILS</h1>


</head>
<body>    
    <form method="POST" style="margin: 40px 30px;padding: 10px;">

    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Model Number</label>
            <input type="text" class="form-control"  placeholder="Model Number" name="Model_Number" required>
        </div>
    
    
        <div class="form-group col-md-6">
            <label>Product Name</label>
            <input type="text" class="form-control"  placeholder="Product Name" name="Product_Name" required>
        </div>
  </div>

  <div class="form-row">
        <div class="form-group col-md-6">
            <label>Product Price</label>
            <input type="number" class="form-control"  placeholder="Product Price" name="Product_Price" required>
        </div>
        <div class="form-group col-md-6">
          <label>Product Description</label>
          <input type="text" class="form-control"  placeholder="Product Description" name="Product_Desc" required>
        </div>
  </div>

<div class="form-row">
        <div class="form-group col-md-3">
            <label>Quantity</label>
            <input type="number" class="form-control" name="Quantity" placeholder="Quantity" required>
        </div>
        
        <div class="form-group col-md-4">
            <label>Brand</label>
            <input type="text" class="form-control"  placeholder="Brand"  name="Brand" required>
        </div>

        <div class="form-group col-md-4">
            <label>Product Image</label>
            <input type="text" class="form-control"  placeholder="Product Image"  name="Product_Img" required>
        </div>

  </div>
  


  <div class="form-group ">
    <button type="submit" class="btn btn-success col-md-2" style="margin-top: 20px;margin-left: 40px;">Submit</button>
  </div>

    </form>


    
</body>
</html>