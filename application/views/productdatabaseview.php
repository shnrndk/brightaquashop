<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<table class="table table-hover table-bordered">
<thead>
  <tr>
    <th scope="col">Product ID</th>
    <th scope="col">Product Name</th>
    <th scope="col">Product Description</th>
    <th scope="col">Product Image</th>
    <th scope="col">Quantity</th>
    <th scope="col">Status</th>
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
        <td>'.$value['product_img'].'</td>
        <td>'.$value['quantity'].'</td>
        <td>'.$value['brand']."</td>
        <td><a class='btn btn-danger' role='button' href='/CRUDAssignment/index.php/Payementgateway/delete/".$value['id']."'>Delete</a>
        <a class='btn btn-warning' role='button' href='/CRUDAssignment/index.php/Payementgateway/passtoupdateform/".$value['id']."'>Update</a></td>
        </td></tr>";
       
        
    }

?>
  </tbody>
</table>