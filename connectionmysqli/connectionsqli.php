<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "apjdatabase";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    else {
        echo "Successfully connected <br><br>\n";
    }