<?php
    $servername ="localhost:3306";
    $username = "kirsten";
    $password = "kirsten";
    $dbname = "phonebook";


    //CREATE CONNECTION

    $conn=new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error){
        die ("Connection failed" . $conn->connect_error);
    }
?>