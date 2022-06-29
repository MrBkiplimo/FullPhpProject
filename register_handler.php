<?php
if (isset($_POST["btn_reg"])){
    $userName = $_POST["u_name"];
    $password = $_POST["u_pass"];
    $encryptedPassword = md5($password);
    require_once "db_connection.php";
    $insertQuery = "INSERT INTO `users`(`id`, `jina`, `siri`) 
            VALUES (null,'$userName','$encryptedPassword')";
//    before save check if username already exists>>>lines 10 to 14
    $selectExistingUserQuery = "SELECT * FROM `users` WHERE jina='$userName'";
    $existingUsers = mysqli_query($connection,$selectExistingUserQuery);
    $countExistingUsers = mysqli_num_rows($existingUsers);
    if ($countExistingUsers > 0){
        echo "Sorry, user with that username already exists";
    }else{
//        ...then save
        $save = mysqli_query($connection,$insertQuery);
        if (isset($save)){
            header("location:welcome.php");
        }else{
            echo "User registration failed";

        }
    }
}