<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>body{background-color: grey;}</style>
    <form action="stop.php" method="get">
        <input type="submit" value="Start" name="start">
        <input type="submit" value="Stop" name="stop">
        <br><br><br><br>

        <input type="radio" name="letter" value="A"> A <br>
        <input type="radio" name="letter" value="B"> B <br> 
        <input type="radio" name="letter" value="C"> C <br>
        <input type="submit" value="Submit" name="submitt">
        <br><br><br><br>

        <label for="age"> Age: </label>
        <input type="text" name="age"> <br>
        <label for="email"> Email: </label>
        <input type="text" name="email"> <br>
        <input type="submit" value="Submit" name="submittt">

    </form>
</body>
</html>

<?php 
$x=1;
    //echo($x."<br>");
    //$x++;
    if(isset($_GET["stop"])) echo "stop";
    if(isset($_GET["start"])) echo "start";

    if(isset($_GET["submitt"])){
        if(isset($_GET["letter"])){
            $letter_var=$_GET["letter"];
            echo $letter_var;
        }
        else echo"Please Select";
    }

    if(isset($_GET["submittt"])){
        $age=$_GET["age"];
        $age=filter_input(INPUT_GET,"age",FILTER_SANITIZE_NUMBER_INT);
        echo "your age is $age";

        $email=$_GET["email"];
        $email=filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL);    #returns empty string if invalid
        if(empty($email)) echo "Invalid email";
        else echo "your email is $email";
    }


    setcookie("fav_food","abc",time()+ (86400*2), "/");
    if(isset($_COOKIE["fav_food"])){
        echo "your favourite food is {$_COOKIE["fav_food"]}";
    }
    else{ echo " you dont have a favourite food"; }

?>