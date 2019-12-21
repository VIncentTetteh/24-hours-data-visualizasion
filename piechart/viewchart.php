<?php
    require_once('function.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstraps/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Visualise Data</title>
</head>
<body class="viewchart">
    <div class="container  ">
        <div class="container "> 
            <table class="table">
                <thead>
                    <tr class="dataset">
                        <th>Selected Task</th>
                        <th>Hour spent</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php while($row= $result->fetch_assoc()): ?>
                <tbody>
                    <tr class="dataset">
                        <td><?php echo $row['Task']; ?></td>
                        <td><?php echo $row['hour']; ?></td>
                        <td><a href="viewchart.php?Delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                
                </tbody>
                <?php endwhile ?>
            </table>
        </div>
        <div align="center"><a href="display.php" class="btn btn-primary" id="h">View Chart</a> <a href="index.php" class="btn btn-info">Back</a></div>
    
    </div>
    
</body>
<script src="bootstraps/js/bootstrap.min.js"></script>
</html>