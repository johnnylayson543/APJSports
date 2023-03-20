<?php
    // PHP connect to DB credentials
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "apjdatabase";

    $conn = mysqli_connect($servername, $username, $password, $dbname);


    // If there is no connection
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error()); // Connection to DB failed
    }

    else {
        echo "Successfully connected <br><br>\n"; // Connected to DB successfully
    }