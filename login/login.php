<?php 
include("_sqlconn.php");

if(isset($_POST["submit"])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    $q2=" select * from sigin where username='$username' and password='$password' ";
    $result= mysqli_query($conn,$q2);
    if(mysqli_num_rows($result)>0){
        session_start();
        $row=mysqli_fetch_assoc($result);
        $_SESSION["username"]=$row["username"];
        $_SESSION["password"]=$row["password"];
        header("location: userpage.php");
    }
    else{
        echo "Incorrect credentials";
    }
}
?>