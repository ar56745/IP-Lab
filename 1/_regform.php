<?php
include("_sqlconn.php");

if($_SERVER["REQUEST_METHOD"]="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];

    if(empty($username)||empty($password)) echo "Missing username/password";
    else{
        $q1="INSERT INTO userlist VALUES('$username','$password')";
        mysqli_query($conn,$q1);
    }
}

?>