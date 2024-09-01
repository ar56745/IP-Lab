<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $maths = $_POST["maths"];
    $physics = $_POST["physics"];
    $chemistry = $_POST["chemistry"];

    // Calculate total and average grade
    $total_grade = $maths + $physics + $chemistry;
    $average_grade = $total_grade / 3;

    // Process the form data here (e.g., save to database)

    echo "Student Profile Successfully Created:<br>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Age: $age <br>";
    echo "Maths Grade: $maths <br>";
    echo "Physics Grade: $physics <br>";
    echo "Chemistry Grade: $chemistry <br>";
    echo "Total Grade: $total_grade <br>";
    echo "Average Grade: $average_grade";
} else {
    echo "Form submission method not valid.";
}
?>