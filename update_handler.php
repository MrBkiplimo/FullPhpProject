<?php
//check if the update button has been clicked
if (isset($_POST["btn_update"])){
//    RECEIVE DATA FROM FORM
    $userId=$_POST["u_id"];
    $updatedName=$_POST["u_name"];
    $updatedPassword=$_POST["u_pass"];
//    connect to the database
    require_once "db_connection.php";
//    create the update query
    $updatequery="UPDATE `users` SET `jina`='$updatedName',`siri`='$updatedPassword' WHERE id='$userId'";
//    execute the update query
    $update=mysqli_query($connection,$updatequery);
//check if the update was successful
    if (isset($update)){
        header("location:home.php");
    }else{
        echo "Updating failed";
    }


}
