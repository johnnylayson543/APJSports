<?php
//include "connection.php";

$servername = "localhost";
$username = "root";
$password = "password";


try {
    $conn = new PDO("mysql:host=$servername;dbname=apjdatabase", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    $sql = "SELECT * FROM item WHERE Sport = 'Basketball'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    echo 'this is pdo';

    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<img src='../images/basketball/" . $row["image"] . "' width='250' height='250'>" .
                "Item id = " . $row["itemID"] . " Price = " . $row["price"] . " Stock = " . $row["stock"] .
                " Sport = " . $row["Sport"] . "<br><br>";
        }

    }

    else {
        echo '0 results found';
    }

    $pdo = null;

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


