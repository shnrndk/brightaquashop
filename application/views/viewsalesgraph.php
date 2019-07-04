
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Order ID", "Payments"],
        <?php
        
          foreach ($paymentdetails as $key => $value){
            echo '["';
            echo $value['orderid'];
            echo '",';
            echo $value['Totalpayment'];
            echo '],';
          }
          
        ?> 
        
        
        
        
        
        /*
        ["AC234",99],
        ["AC456",118],
        ["AC699",107],
        ["AL301",54],
        ["AL452",226],
        ["AL875",149],
        ["AP204",214],
        ["AP302",57],
        ["AP789",99],
        ["AT702",79],
        ["F071",125]*/
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1]);

      var options = {
        title: "Payments Summary Graph",
        width: 1600,
        height: 800,
        bar: {groupWidth: "60%"},
        legend: { position: "center" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 3600px; height: 1200px;"></div>
 

