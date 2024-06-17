<?php
$link = @mysqli_connect( 
            'localhost', 
            'root',    
            '', 
            'nukshop'); 
    
    if (!$link)
    {
        die("Failed to connect to Database<br/>");
    }

    $SQL="SELECT * FROM `cart`";
    $result = mysqli_query($link, $SQL);
?>

<html>
  <head>
    <meta charset = "utf-8">
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = google.visualization.arrayToDataTable([
          ['nukshop', 'admin_creds']
          <?php
            while($row=mysqli_fetch_assoc($result)){
              $user = $row['merch_name'];
              $admin = $row['quantity'];
              echo ",['$user', $admin]";
            }
          ?>
        ]);

        // Set chart options
        var options = {'title':'How Many Merchandise Are Sold?',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>