<?php
//check if button clicked
if (isset($_GET["u_id"])){
    $receivedId=$_GET["u_id"];
    $receivedName=$_GET["u_name"];
    $receivedPassword=$_GET["u_pass"];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <!--    js linking-->
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <!--    css linking-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
<section>
    <div class="row text-center">
        <div class="col-3"></div>
        <div class="col-6">
            <h3 class="text-info">Updating user</h3>
            <form method="POST" action="update_handler.php">
                <input value="<?php echo $receivedId;?>" name="u_id" type="hidden">
<!--                This field wont show coz its of type hidden-->
                <input value="<?php echo $receivedName;?>" class="form-control" name="u_name" placeholder="Enter Name" type="text"><br>
                <input value="<?php echo  $receivedPassword;?>"class="form-control" name="u_pass"placeholder="Enter Password" type="password"><br><br>
                <input class="btn btn-outline-success  text-uppercase" name="btn_update"value="update" type="submit">
                <a class="btn btn-outline-success text-uppercase" href="home.php">Back</a>
            </form>
        </div>
        <div class="col-3"></div>
    </div>

</section>

</body>
</html>
