<?php
session_start();
include("_sqlconn.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userpage</title>
</head>
<body>
    hello <?php 
        $username=$_SESSION["username"];
        echo"$username";
    ?>
    <a href="logout.php">Logout</a>
</body>
</html>