<style>
  .text-hide-me {
    display:inline-block;
    width:100%;
    white-space: nowrap;
    overflow:hidden !important;
    text-overflow: ellipsis;
  }
</style>


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
          <span class='card-title'>";
          echo $value['product_name'];
          echo"</span>";
        echo "</div>
        <div class='card-content'>";
          echo $value["product_desc"];
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