<?php
//start session a second time
session_start();
if (!isset($_SESSION["u_name"])){
    header("location:login_and_register.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
</head>
<body>
<div class="mt-3">
    <h1 class="text-info text-center float-left">All Users</h1>
    <a class="btn btn-outline-danger    float-right" href="logout.php">LOG OUT</a>
    <table class="table table-hover ">
</div>

    <tr>
        <th class="bg-secondary"><span class="text-white">Id</span></th>
        <th class="bg-secondary"><span class="text-white">Username </span></th>
        <th class="bg-secondary"><span class="text-white">Delete </span></th>
        <th class="bg-secondary"><span class="text-white">Update</span></th>

    </tr>
    <?php
//    connect
    require_once "db_connection.php";
//    select data from db
    $selectQuery = "SELECT * FROM `users` WHERE 1";
    $users = mysqli_query($connection,$selectQuery);
    foreach ($users as $user) {
//        Note that the jina,siri and id down below are from the database columns
        $userName = $user["jina"];
        $passWord = $user["siri"];
        $id = $user["id"];
        echo "<tr>
                    <td>$id</td>
                    <td>$userName</td>
                    <td><a class='btn btn-danger' href='delete.php?u_id=$id'>Delete</a></td>
                    <td><a class='btn btn-info' href='update.php?u_id=$id&u_name=$userName&u_pass=$passWord'>Update</a></td>
                    
                </tr>";
    }
    ?>
</table>
</body>
</html>











