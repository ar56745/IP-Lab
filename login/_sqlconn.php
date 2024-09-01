<?php 
#phpinfo();
$servername="localhost";
$username="user1";
$password="abcd1234";
$dbname="studentdb";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//else echo"connected";

?>