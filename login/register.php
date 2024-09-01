<?php 
include("_sqlconn.php");

if(isset($_POST["submit"])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    $q1="insert into sigin values('$username','$password')";
    mysqli_query($conn,$q1);
    if(mysqli_affected_rows($conn)>0){
         header("location:login_page.html");
         exit();
    }
}

?>