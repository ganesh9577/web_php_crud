<?php 
    include 'connect.php';

    $bb = $_GET["updateid"];
    //echo $bb;
    if(isset($_POST['update']))
    {
        $a1 = $_POST['name'];
        $a2 = $_POST['city'];

        //$sql = "UPDATE `crud` SET `F_name`='$a1',`department`='$a2',`email`='$a3',`pass`='$a4' WHERE id = '$bb'";
        $sql = "UPDATE `event` SET `name`='$a1',`city`='$a2' WHERE id = '$bb'";

        $kk = mysqli_query($con,$sql);
        if($kk)
        {
            echo"succefully update..";
            header("Location: index.php");
        }
        else
        {
            echo"not update succefully";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<!-- <style>
        body{
            background-image: url('cc.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: cover;
        }
        form{
            align-items: center;
            border-style: solid;
            text-align : center;
            border-radius: 200px;
            padding: 50px;
            margin: 20px;
            margin-left: 500px;
            margin-right: 500px;
        }
        input{
            text-align: center;
        }
    </style> -->

<body>
<form method="POST">
        <!-- <h1>Update</h1>
        name :<input type="text" name="name"  ><br><br>
        department :<input type="text" name="department"><br><br>
        email :<input type="text" name="email"><br><br>
        password :<input type ="text" name="pass"><br><br>
        <input type="submit" name="submit" value="submit"><br><br> -->

    <h1>event managment update</h1>
    <form method="POST" action="">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        update
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            event name  : <input type = "text" name="name"><br><br>
            city:<input type = "text" name = "city"><br><br><br>
            <input type = "submit" name="update" value="update" style="color:green;"><br><br>
        <!-- <a href="index.php">Register User</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="">Forgot password</a> -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
            </div>
        </div>
        </div>
    </form>

        
</form>
    
</body>
</html>
