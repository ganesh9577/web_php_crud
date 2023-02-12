<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<style>
        table, th, td,caption {
            border: 1px solid black;
            background-color:powderblue;
            
    }
    table{
        align: center;
        text-align : center;
    }
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
            /* border-radius: 200px; */
            padding: 50px;
            margin: 20px;
            margin-left: 500px;
            margin-right: 500px;
        }
        h1{
            align-items: center;
            border-style: solid;
            text-align :center;
            margin-top: 5px;
        }
</style>
<body>
    <h1>event managment</h1>
    <form method="POST" action="insert.php">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin: 5px;">
        add
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
            <input type = "submit" name="login_info" value="login_info" style="color:green;"><br><br>
        <!-- <a href="index.php">Register User</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="">Forgot password</a> -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
            </div>
        </div>
        </div>
        <div>
        <table border="3em" style="font-weight: bold; width: 500px; height: 50px ; text-align:center;" align="center" id="table1">
            <tr id="tr">
                <th>num</th>
                <th>event Name</th>
                <th>city name</th>
                <th colspan="2">opration</th>
            </tr>
            <?php 
            $sqla = "SELECT *FROM event";
            $aa = mysqli_query($con,$sqla);
            
            // $rows = mysqli_fetch_array($aa);
            while($rows = mysqli_fetch_array($aa))
            { ?>
                <tr>
                    <td><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['name']; ?></td>
                    <td><?php echo $rows['city']; ?></td>
                    <td><a href="delete.php?userid=<?php echo $rows['id'];?>">delete</a></td>
                    <td><a href="update.php?updateid=<?php echo $rows['id'];?>">update</a></td>
                </tr>
            <?php }
            ?>
        </table>
        
        </div>
    </form>

</body>
</html>