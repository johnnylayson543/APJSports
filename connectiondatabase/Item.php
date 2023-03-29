<?php

class Item
{
    private int $itemID;
    private float $price;
    private String $image;
    private int $stock;
    private String $sport;


    public function __showItems(String $sport): void
    {

        include "connection.php";

        $sql = "SELECT * FROM item WHERE Sport = '" . $sport . "'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<img src='../images/" . $sport . "/" . $row["image"] . "' width='250' height='250'>" .
                    "Item id = " . $row["itemID"] . " Price = " . $row["price"] . " Stock = " . $row["stock"] .
                    " Sport = " . $row["Sport"] . "
                    <br><br>";
            }

        }
        else
        {
            echo '0 results found';  // Print 0 found
        }

        $pdo = null;
    }

    public function __incStock(int $itemID, int $num): void {

        include "connection.php";

        $sql = "SELECT * FROM item WHERE Sport = '" . $itemID . "'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $itemStock = $row["stock"] ;

        $sql = "UPDATE item SET stock = '" . $itemStock + $num . "' WHERE itemID = '" . $itemID . "'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

    }

    public function __decStock(int $itemID, int $num): void {



    }




}