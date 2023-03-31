<?php

class Item
{
    private int $itemID;
    private float $price;
    private String $image;
    private int $stock;
    private String $sport;

    /**
     * @return int
     */
    public function getItemID(): int
    {
        return $this->itemID;
    }

    /**
     * @param int $itemID
     */
    public function setItemID(int $itemID): void
    {
        $this->itemID = $itemID;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return String
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param String $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getStock(): int
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     */
    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }

    /**
     * @return String
     */
    public function getSport(): string
    {
        return $this->sport;
    }

    /**
     * @param String $sport
     */
    public function setSport(string $sport): void
    {
        $this->sport = $sport;
    }

    public function __showItems(String $sport): void
    {

        include "../connectiondatabase/connection.php";

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

        include "../connectiondatabase/connection.php";

        $sql = "SELECT * FROM item WHERE itemID = '" . $itemID . "'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $itemStock = $row["stock"] ;

        $newStock = $itemStock + $num;

        $sql = "UPDATE item SET stock = " . $newStock . " WHERE itemID = '" . $itemID . "'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

    }

    public function __decStock(int $itemID, int $num): void {

        include "../connectiondatabase/connection.php";

        $sql = "SELECT * FROM item WHERE itemID = '" . $itemID . "'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $itemStock = $row["stock"] ;

        $newStock = $itemStock - $num;

        $sql = "UPDATE item SET stock = " . $newStock . " WHERE itemID = '" . $itemID . "'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

    }

    public function __addToOrder(): void{


    }

}