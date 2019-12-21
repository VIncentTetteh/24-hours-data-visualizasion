<?php
    require_once('function.php');
?>
<html>
  <head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstraps/css/bootstrap.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php while($row = mysqli_fetch_array($result)): ?>
          ['<?php echo json_encode($row['Task']); ?>',      <?php echo $row['hour']; ?>],
        //   ['Commute',  2],
        //   ['Watch TV', 2],
        //   ['Sleep',    7],
		//   ['School',    5]
         <?php endwhile; ?>
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D:true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    
  </head>
  <body class="view">
    <div id="piechart" style="width: 900px; height: 500px;" ></div>

    <div>
     <h1 align="center"> <a href="index.php" class="btn btn-primary">Back</a></h1>
     
     <h1 align="center"> <a href="display.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">clear chart</a></h1>
      
</div>
  </body>
  <script src="bootstraps/js/bootstrap.min.js"></script>
</html>

