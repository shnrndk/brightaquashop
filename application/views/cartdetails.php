
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h1 style="text-align: center; margin-top: 20px"> View Temporary Carts of the Users</h1>
<table class="table table-hover table-bordered container" style="margin-top: 10px">
<thead>
  <tr>
    <th scope="col">Product ID</th>
    <th scope="col">Product Name</th>
    <th scope="col">Product Price</th>
    <th scope="col">Product Brand</th>
    <th scope="col">Bought Quantity </th>
    <th scope="col">Customer ID</th>
  </tr>
</thead>
<tbody>
<?php



    
    foreach ($cartdetails as  $value){
        echo '<tr><td>'.$value['id'].'</td>
        <td>'.$value['product_name'].'</td>
        <td>'.$value['product_price'].'</td>
        <td>'.$value['brand'].'</td>
        <td>'.$value['quantity'].'</td>
        <td>'.$value['customer_id'].'</td>';
        
    }

?>
  </tbody>
</table>






















?>