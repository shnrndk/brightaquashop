<style>
 
  .card {
    display:inline-block;
    width:100%;
    white-space: nowrap;
    overflow:hidden !important;
    text-overflow: ellipsis;
  }
   /*
  .card-content{
    font-weight: bold;
    font-size: 15px;
    align-content:center;
  }
  .card-action{
    font-size: 25px;
    background-color: red;
    color: salmon;
    align-content: center;
  }
  .card-cont{
    font-size: 15px;
    align-content:center;

  }
  #section {
    background-color: lightblue;
  }
  span{
    color: blue;
  }
*/
</style>

<div id="section">
<?php

echo "<div style='margin-top: 50px;' class='container'>";
foreach ($productdetails as $key => $value)
{
    echo "
    <div class='row'>
    <div class='col s6 m4 l3'>
      <div class='card'>
        <div class='card-image'>
          <img width='200px' height='200px' src='";
          echo $value['product_img'];
          echo "'>
          <span class='card-content'>";
          echo $value['product_name'];
          echo"</span>";
          echo "</div>
          <div class='card-cont'>";
          echo $value["product_desc"];
          echo" </p>
          </div>
          <div class='card-content'>";
          echo "RS ".$value["product_price"]."/=";
          echo" </p>
          </div>
          <div class='card-action'>
          <a href='";
          echo site_url("cart/add/".$value["id"]);
          echo "'>Add to cart!</a>
        </div>
      </div>
    </div>
";
}

echo "</div>";
