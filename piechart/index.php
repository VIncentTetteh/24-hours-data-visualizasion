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
<body class="getbody">
    <div class="container">
        <div class="container">
            <h1 align="center">WELCOME TO THE 24 HOUR VISUAL CHART</h1>
            
            
            
            
        </div>
        <div class="container view">
            
            <div class="form-row">
            <div class="col-md-7 col-sm-4 col-xs-12"></div>
                    <div class="col-md-7 col-sm-4 col-xs-12 ">
                    </div>
                    <form action="viewchart.php" method="post" class="form-group moveItem">
                    <div class="form-group">
                    <label for="text">Task</label>
                    <input type="text" name="Task" placeholder="Enter Task preformed" class="form-control" required>
                    </div>

                    <div class="form-group">
                    <label for="text">Hour</label>
                    <input type="text" name="hour" placeholder="Enter hour spent" class="form-control" required>
                    </div>
        
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary"><br><br>
                </form>
                </div>
            <div class="col-md-7 col-sm-4 col-xs-12"></div>
            </div>
            </div>

            <div class="container">
                <div class="container">
                    <div class="form-row">
                        <div class="col-md-7 col-sm-4 col-xs-12"></div>
                        <div class="col-md-7 col-sm-4 col-xs-12">
                    </div>
                    <form action="" method="post" class="form-group moveItem">
                        <div class="form-group">
                            <label for="text">Remind Me</label>
                            <textarea row="10" name="remind" placeholder="Reminder" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="text">Email</label>
                            <input type="email" name="email" placeholder="example@email.com" class="form-control" id="email" required>
                        </div>

                        <div class="form-group">
                            <label for="text">Schedule</label>
                            <input type="date" name="time"  class="form-control " id="time">
                        </div>

                        <input type="submit" name="save" value="Save" class="btn btn-primary "><br><br>
                    </form>
                    
                </div>
            <div class="col-md-7 col-sm-4 col-xs-12"></div>
            </div>
            </div>
            
        </div>
    </div>
</body>
<script src="bootstraps/js/bootstrap.min.js"></script>
</html>
