<?php
include 'connect.php';

    if(isset($_POST['login_info']))
    {
        $name = $_POST['name'];
        $city = $_POST['city'];

        $sql = "INSERT INTO `event`(`name`, `city`) VALUES ('$name','$city')";

        if(mysqli_query($con,$sql))
        {
            echo "succefully inserted";
            header("Location: index.php");
        }
        else{
            echo "not inserted";
        }
    }

?>