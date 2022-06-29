<?php
//start session the third time
session_start();
session_destroy();
header("location:login_and_register.php");
