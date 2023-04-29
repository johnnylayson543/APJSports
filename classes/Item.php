<link rel="stylesheet" type="text/css" href="../css/itembutton.css">
<?php

use loginsession\sanitizer;


class Item
{
    //crating variables ************************************************************************************************
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
    //creating constructor**********************************************************************************************
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
    //Creating all the getters and setters******************************************************************************
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
    // All the methods are below****************************************************************************************
    // This function shows (specific) items to the user
    public function __showItems(string $sport): void
    {
        //connecting to the database
        include "../connectiondatabase/connection.php";
        //creating and executing an sql statement
        $sql = "SELECT * FROM item WHERE Sport = '" . $sport . "'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        //if more than 0 rows appear
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {//while there are results in a row
                //assigning variables to each row of the table in the database
                $objectID = $row["itemID"];
                $objectPrice = $row["price"];
                $objectImage = $row["image"];
                $objectStock = $row["stock"];
                $objectSport = $row["Sport"];
                //creating a name for an object
                $objectName = "item" . $objectID;
                $object = new Item($objectID, $objectPrice, $objectImage, $objectStock, $objectSport);//creating a new object
                $$objectName = $object;//assigning a name to the object

                echo "<div class = 'item'>
                        <form method='post' action='add_to_cart.php'>
                        <input type='hidden' name='itemId' value='" . $row["itemID"] . "'>
                        <input type='hidden' name='price' value='" . $row["price"] . "'>
                        <input type='hidden' name='sport' value='" . $row["Sport"] . "'>

                        <div>
                            <img src='../images/" . $sport . "/" . $row["image"] . "' width='200' height='200'><br>
                        </div>
                        
                             <ul>
                                <li>Item id = " . $row["itemID"] . "</li> 
                                <li>Price = " . $row["price"] . "</li>
                                <li>Stock = " . $row["stock"] . "</li> 
                                <li>Sport = " . $row["Sport"] . "</li>
                            </ul>
                            <input type = 'submit' name ='addToCart' value ='Add to Cart'> <br><br>
                        </form>
                      </div>";
            }//end of the while loop
        //end of tthe if statement
        } else {
            echo '0 results found';  // Print 0 found
        }

        $pdo = null;//disconnecting from the database

    }

    // This function shows all items to the user
    public function __showAllItems(): void {
        //connecting to the db
        include "../connectiondatabase/connection.php";
        //creating and running a sql statement
        $sql = "SELECT * FROM item";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        //if we get more than 0 result
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {//for each row of the result table do the following
                //assigning each rows result to a variable
                $objectID = $row["itemID"];
                $objectPrice = $row["price"];
                $objectImage = $row["image"];
                $objectStock = $row["stock"];
                $objectSport = $row["Sport"];
                //creating a name for the item object
                $objectName = "item" . $objectID;
                $object = new Item($objectID, $objectPrice, $objectImage, $objectStock, $objectSport);//creating item object
                $$objectName = $object;//assigning name to the object

                echo " " .
                    "Item id = " . $row["itemID"] . " Price = " . $row["price"] . " Stock = " . $row["stock"] .
                    " Sport = " . $row["Sport"] . "<input type ='hidden' name = 'itemId value='" . $row ["itemID"] . "'>".
                    " <br><br>";
            }//end of while
        //end of if
        } else {
            echo '0 results found';  // Print 0 found
        }
        //closing connection to db
        $pdo = null;
    }

    public function __incStock(int $itemID, int $num): float
    {
        //connecting to the db
        include "../connectiondatabase/connection.php";
        //creaing an executing an sql statement
        $sql = "SELECT * FROM item WHERE itemID = '" . $itemID . "'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        //we get the results of the search and assign them to the row variable
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $itemStock = $row["stock"];//assigning a variable to the row column
        //creating a newStock variable an assigning a value to it
        $newStock = $itemStock + $num;
        //Creating a sql statement to increase the stock in db and running it
        $sql = "UPDATE item SET stock = " . $newStock . " WHERE itemID = '" . $itemID . "'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        //returning the new stock variable
        return $newStock;

    }

    public function __decStock(int $itemID, int $num): float
    {
        //connecting to a db
        include "../connectiondatabase/connection.php";
        //creating a sql statement and executing it
        $sql = "SELECT * FROM item WHERE itemID = '" . $itemID . "'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        //we get the results of the search and assign them to the row variable
        $row = $stmt->fetch(PDO::FETCH_ASSOC);//assigning a variable to the row column
        $itemStock = $row["stock"];//assigning a variable to the row column
        //creating a newStock variable an assigning a value to it
        $newStock = $itemStock - $num;

        // Prevent stock from going below zero
        if ($newStock < 0) {
            $newStock = 0;
        }
        //Creating a sql statement to increase the stock in db and running it
        $sql = "UPDATE item SET stock = " . $newStock . " WHERE itemID = '" . $itemID . "'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        //returning the new stock variable
        return $newStock;
    }


    public function createItem(int $itemID, float $price, string $image, int $stock, string $sport): void
    {

        // It's probably best to create a separate page which does the POST request for these stuff
        // Then do the POST requests on the variable on the different page
        // and then pass the variables as parameters for createItem then sanitize

        require_once "../loginsession/sanitizer.php";
        try {
            // Connect to the DB
            include '../connectiondatabase/connection.php';

            // Create new items array (already sanitized during the POST request)
            // Use the parameters created & passed by the constructor and createItem function to create new items
            $new_item = array(
                "itemID" => $itemID,
                "price" => $price,
                "image" => $image,
                "stock" => $stock,
                "Sport" => $sport,
            );

            // Prepare the sql query, create the statement and execute it
            $sql = sprintf("INSERT INTO %s (%s) values (%s)", "item",
                implode(", ", array_keys($new_item)),
                ":" . implode(", :", array_keys($new_item)));
            $stmt = $conn->prepare($sql);
            $stmt->execute($new_item);

        } catch (PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }

        // Check if the submitted form is successful
        // If yes, echo that the item was successfully created
        if (isset($_POST['Create']) && $stmt) {
            echo '<br><br>';
            echo 'Item ' . $new_item['itemID'] . ' has been successfully created!';
            echo '<br><br>';
        }

    }

    public function __showItem(int $id): void
    {

        $string = "item " . strval($id) . " exists";

        echo $string;
    }

    public function __createItemObjects(): void
    {
        //connecting to the db
        include "../connectiondatabase/connection.php";
        //creating an sql statement and running it
        $sql = "SELECT * FROM item";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        //while we get results assign the row of answers to the row variable
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //assigning values to all variables
            $objectID = $row["itemID"];
            $objectPrice = $row["price"];
            $objectImage = $row["image"];
            $objectStock = $row["stock"];
            $objectSport = $row["Sport"];
            //creating object name
            $objectName = "item" . $objectID;
            $object = new Item($objectID, $objectPrice, $objectImage, $objectStock, $objectSport);//creating a new object
            $$objectName = $object;//assigning name to object

        }//end of while
        //closing db connection
        $pdo = null;

    }
}