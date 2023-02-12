<?php
    include 'connect.php';
    $bb = $_GET['userid'];
    //echo "$bb";
   // $sql1 = "SELECT F_name FROM crud WHERE id = '$bb'";
    $sqls = "DELETE FROM event WHERE id = '$bb'";
    if(mysqli_query($con,$sqls)){
        echo '<h1 style="text-align:center;">'."recod delete succefully".'</h1>';
        header("Location: index.php");
    }
    else{
        echo"not delete";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
            body{
            background-image: url('cc.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: cover;
        }
</style>
<body>
    <h1></h1>
</body>
</html>