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
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Profile Result</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
                color: blue;
            }
            .result {
                border: 1px solid #ccc;
                background-color: antiquewhite;
                padding: 20px;
                max-width: 400px;
            }
            .result h2 {
                margin-top: 0;
                color: brown;
            }
            .result p {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="result">
            <h2>Student Profile Successfully Created</h2>
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Age:</strong> <?php echo $age; ?></p>
            <p><strong>Maths Grade:</strong> <?php echo $maths; ?></p>
            <p><strong>Physics Grade:</strong> <?php echo $physics; ?></p>
            <p><strong>Chemistry Grade:</strong> <?php echo $chemistry; ?></p>
            <p><strong>Total Grade:</strong> <?php echo $total_grade; ?></p>
            <p><strong>Average Grade:</strong> <?php echo $average_grade; ?></p>
        </div>
    </body>
    </html>

<?php
} else {
    echo "Form submission method not valid.";
}
?>