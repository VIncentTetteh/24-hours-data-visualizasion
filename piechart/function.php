<?php
    require_once('mailer.php');
    require_once('connect.php');
    if(isset($_POST['submit'])){
        $Task = $_POST['Task'];
        $hour = $_POST['hour'];
        
        $sql = "SELECT* FROM chart WHERE Task = '$Task'";
        $result = mysqli_query($mysqli, $sql);
        $resultChecked = mysqli_num_rows($result);
       if($resultChecked > 0){
           echo "<script> alert('Task already exist') </script>";
       }
       else{
        $mysqli->query("INSERT INTO chart(Task,hour) VALUES('$Task','$hour')") or die(mysqli_error($mysqli));
       }
    }

    $result = $mysqli->query("SELECT * FROM chart ") or die(mysqli_error($mysqli));
    // echo json_encode($result);
    if(isset($_POST['save'])){
        save();
    }

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("TRUNCATE chart");
     }

    if(isset($_GET['Delete'])){
        $ID = $_GET['Delete'];
        $mysqli->query("DELETE FROM chart WHERE id=$ID;");
     }
     
?>
