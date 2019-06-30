<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h1 style="text-align: center; margin-top: 20px"> User Account Details </h1>
<table class="table table-hover table-bordered container" style="margin-top: 10px">
<thead>
  <tr>
    <th scope="col">Customer ID</th>
    <th scope="col">UserName</th>
    <th scope="col">Email</th>
    <th scope="col">Password Id</th>
  </tr>
</thead>
<tbody>
<?php

    foreach ($customerdetails as $key => $value){
        echo '<tr><td>'.$value['customer_id'].'</td>
        <td>'.$value['username'].'</td>
        <td>'.$value['email'].'</td>
        <td>'.$value['password'].'</td>';
    
    }

?>
  </tbody>
</table>