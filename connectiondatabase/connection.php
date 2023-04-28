<?php

require '../connectiondatabase/config.php';

// This file + block creates and establishes a connection to the Database using config.php credentials
try {
    $conn = new PDO($dsn, $username, $password, $options);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
