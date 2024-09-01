<?php
include("_sqlconn.php");

$q1="INSERT INTO class101 VALUES(33,'C',2.1)";
$q2="insert into class101 values(34,'D',2.4)";

//mysqli_query($conn,$q1);
//mysqli_query($conn,$q2);

$q3="SELECT * FROM class101";
$result=mysqli_query($conn,$q3);

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo $row["id"]."<br>";
        echo $row["name"]."<br>";
        echo $row["gpa"]."<br>";
    }
}

mysqli_close($conn);
?>