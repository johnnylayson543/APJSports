<?php
include "connection.php";



$sql = "SELECT * FROM item WHERE Sport = 'Boxing'";
$stmt = $conn->prepare($sql);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<img src='../images/boxing/" . $row["image"] . "' width='250' height='250'>" .
            "Item id = " . $row["itemID"] . " Price = " . $row["price"] . " Stock = " . $row["stock"] .
            " Sport = " . $row["Sport"] . "<br><br>";
    }

}