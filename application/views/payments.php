<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h1 style="text-align: center; margin-top: 20px"> View Customer Payments </h1>
<table class="table table-hover table-bordered container" style="margin-top: 10px">
<thead>
  <tr>
    <th scope="col">Order ID</th>
    <th scope="col">Address 1</th>
    <th scope="col">Address 2</th>
    <th scope="col">Postal Id</th>
    <th scope="col">Total Payment</th>
  </tr>
</thead>
<tbody>
<?php



    
    foreach ($paymentdetails as $key => $value){
        echo '<tr><td>'.$value['orderid'].'</td>
        <td>'.$value['Address1'].'</td>
        <td>'.$value['Address2'].'</td>
        <td>'.$value['Postalid'].'</td>
        <td>Rs.'.$value['Totalpayment'].'.00</td>';
       
    }

?>
  </tbody>
</table>