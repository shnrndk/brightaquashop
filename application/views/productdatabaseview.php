<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h1 style="text-align: center; margin-top: 20px"> View Product Details</h1>
<table class="table table-hover table-bordered">
<thead>
  <tr>
    <th scope="col">Product ID</th>
    <th scope="col">Product Name</th>
    <th scope="col">Product Price</th>
    <th scope="col">Product Description</th>
    <th scope="col">Quantity</th>
    <th scope="col">Brand</th>
    <th scope="col">Operations</th>
  </tr>
</thead>
<tbody>
<?php



    
    foreach ($productdetails as $key => $value){
        echo '<tr><td>'.$value['id'].'</td>
        <td>'.$value['product_name'].'</td>
        <td>'.$value['product_price'].'</td>
        <td>'.$value['product_desc'].'</td>
        <td>'.$value['quantity'].'</td>
        <td>'.$value['brand']."</td>
        <td><a class='btn btn-danger' role='button' href='/cishop/index.php/Dashboard/delete/".$value['id']."'>Delete</a>
        <a class='btn btn-warning' role='button' href='/cishop/index.php/Dashboard/passtoupdateform/".$value['id']."'>Update</a></td>
        </td></tr>";
       
        
    }

?>
  </tbody>
</table>