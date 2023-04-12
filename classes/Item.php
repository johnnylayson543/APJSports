<link rel="stylesheet" type="text/css" href="../css/itembutton.css">
<?php

use loginsession\sanitizer;


class Item
{
    private int $itemID;
    private float $price;
    private string $image;
    private int $stock;
    private string $sport;

    /**
     * @param int $itemID
     * @param float $price
     * @param String $image
     * @param int $stock
     * @param String $sport
     */
    public function __construct(int $itemID, float $price, string $image, int $stock, string $sport)
    {
        $this->itemID = $itemID;
        $this->price = $price;
        $this->image = $image;
        $this->stock = $stock;
        $this->sport = $sport;
    }


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

    public function __showItems(string $sport): void
    {

        include "../connectiondatabase/connection.php";

        $sql = "SELECT * FROM item WHERE Sport = '" . $sport . "'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $objectID = $row["itemID"];
                $objectPrice = $row["price"];
                $objectImage = $row["image"];
                $objectStock = $row["stock"];
                $objectSport = $row["Sport"];

                $objectName = "item" . $objectID;
                $object = new Item($objectID, $objectPrice, $objectImage, $objectStock, $objectSport);
                $$objectName = $object;

                echo "<img src='../images/" . $sport . "/" . $row["image"] . "' width='250' height='250'>" .
                    "Item id = " . $row["itemID"] . " Price = " . $row["price"] . " Stock = " . $row["stock"] .
                    " Sport = " . $row["Sport"] . "<button onclick=''>Add to Cart</button> <br><br>";
            }

        } else {
            echo '0 results found';  // Print 0 found
        }

        $pdo = null;

        //$item3->__showItem($item3->getItemID());

    }

    public function __incStock(int $itemID, int $num): void
    {

        include "../connectiondatabase/connection.php";

        $sql = "SELECT * FROM item WHERE itemID = '" . $itemID . "'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $itemStock = $row["stock"];

        $newStock = $itemStock + $num;

        $sql = "UPDATE item SET stock = " . $newStock . " WHERE itemID = '" . $itemID . "'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

    }

    public function __decStock(int $itemID, int $num): void
    {

        include "../connectiondatabase/connection.php";

        $sql = "SELECT * FROM item WHERE itemID = '" . $itemID . "'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $itemStock = $row["stock"];

        $newStock = $itemStock - $num;

        $sql = "UPDATE item SET stock = " . $newStock . " WHERE itemID = '" . $itemID . "'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

    }

    public function __addToCart(): void
    {


    }

    public function __createItem(): void
    {

        // It's probably best to create a separate page which does the POST request for these stuff
        // Then do the POST requests on the variable on the different page
        // and then pass the variables as parameters for createItem then sanitize

        require_once "../loginsession/sanitizer.php";
        try {
            // Connect to the DB
            include '../connectiondatabase/connection.php';

            // Create new items and sanitize data
            $sanitize = new sanitizer();
            $create_item = array(
                "itemID" => $sanitize->sanitize($_POST['ItemID']),
                "price" => $sanitize->sanitize($_POST['Price']),
                "image" => $sanitize->sanitize($_POST['Image']),
                "stock" => $sanitize->sanitize($_POST['Stock']),
                "Sport" => $sanitize->sanitize($_POST['Sport']),
            );
            $sql = sprintf("INSERT INTO %s (%s) values (%s)", "item",
                implode(", ", array_keys($create_item)),
                ":" . implode(", :", array_keys($create_item)));
            $stmt = $conn->prepare($sql);
            $stmt->execute($create_item);

        } catch (PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }

        // Check if the submitted form is successful
        if (isset($_POST['Create']) && $stmt) {
            echo '<br><br>';
            echo $create_item['itemID'] . ' has been successfully created!';
            echo '<br><br>';
        }

    }

    public function __showItem(int $id): void
    {

        $string = "item " . strval($id) . " exists";

        echo $string;
    }
    
}
