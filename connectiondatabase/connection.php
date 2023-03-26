<?php

require '../connectiondatabase/config.php';

try {
    $conn = new PDO($dsn, $username, $password, $options);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
