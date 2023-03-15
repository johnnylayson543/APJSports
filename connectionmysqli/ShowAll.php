<?php
include "connectionsqli.php";

$sql = "select * from item";
$qryResult = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($qryResult)) {

    echo "Item id = " . $row["itemID"] . " Price = " . $row["price"] . " image = " . $row["image"] . " Stock = " . $row["stock"] . " Sport = " . $row["Sport"] . "<br><br>";
}

mysqli_close($conn);