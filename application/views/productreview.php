<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container">

<style>
    h1{
        margin-top:20px;
        margin-bottom:30px;
    }
</style>
<?php



foreach($reviewdetails as $prodid){
    echo "<h1>Reviews About ".$prodid['id']."</h1>";
}  

foreach($reviewdetails as $review){

    echo'
    <div class="card w-75" style="border-radius:10px"> 
        <div class="card-body">';
        echo'
            <h5 class="card-title">'.$review['review'].'</h5>
            <p class="card-text">By Customer id '.$review['customer_id'].'</p>
        </div>
    </div>';

}

?>

</div>

