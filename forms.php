<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action ="forms.php">

        <label for="name">Enter Your First Name:</label><br>
                <input type="text" id="name" name="firstname">
                <br>

                <label for="lastname">Enter Your Last Name:</label><br>
                <input type="text" id="surname" name="lastname">
                <br>

                <label for="age">Enter Your Age:</label><br>
                <input type="number" id="age" name="edad">
                <br>
                <br>
                <input type="submit" value="Submit">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name=htmlspecialchars($_POST['name']);
        $lastname=htmlspecialchars($_POST['lastname']);
        $age=htmlspecialchars($_POST['edad']);
    
        echo "<h4>Your Inputs</h4>";
        echo "Name: " .$name ."<br>";
        echo "Last Name: " .$lastname . "<br>";
        echo "Age: " .$age  ."<br>";

    };

?>
</body>
</html>