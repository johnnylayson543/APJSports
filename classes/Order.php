<?php

class Order
{
    private int $orderID;
    private float $price;
    private String $customerName;
    private OrderStatus $orderStatus;

    private array $cart;




    /**
     * @param int $orderID
     * @param float $price
     * @param String $customerName
     * @param OrderStaus $orderStatus
     */
    public function __construct(int $orderID, float $price, string $customerName, OrderStatus $orderStatus)
    {
        $this->orderID = $orderID;
        $this->price = $price;
        $this->customerName = $customerName;
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return int
     */
    public function getOrderID(): int
    {
        return $this->orderID;
    }

    /**
     * @param int $orderID
     */
    public function setOrderID(int $orderID): void
    {
        $this->orderID = $orderID;
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
    public function getCustomerName(): string
    {
        return $this->customerName;
    }

    /**
     * @param String $customerName
     */
    public function setCustomerName(string $customerName): void
    {
        $this->customerName = $customerName;
    }

    /**
     * @return OrderStaus
     */
    public function getOrderStatus(): OrderStaus
    {
        return $this->orderStatus;
    }

    /**
     * @param OrderStaus $orderStatus.
     */
    public function setOrderStatus(OrderStaus $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    public function __showCart(): void {


        $total = 0.0;

        // Items gets added to the shopping cart here. You also have the option to remove them
        if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) {
            foreach ($_SESSION["cart"] as $itemId => $value) {
                echo "<form method='post' action='../html/remove_from_cart.php'>"; // Add form
                echo "Item ID: " . $itemId . " | Sport: " . $value['sport'] . " | Price: " . $value['price'] . " | Quantity: " . $value['quantity'] . "<br>"; // Display the item ID, sport, price, and quantity
                echo "<input type='hidden' name='itemId' value='" . $itemId . "'>"; // Add hidden input for item ID
                echo "<button type='submit' name='removeFromCart'>Remove</button>"; // Add remove button
                echo "</form>"; // Close form
                echo "<br>";

                // Update total
                $total += $value['price'] * $value['quantity'];

            }

            $total = $this->__calcTotal($total);

            echo "Total = " . $total;

        } else {
            echo "Cart is empty";
        }
    }
    public function __removeItem(): void {

    }

    public function __checkout(): void {

    }

    public function __calcTotal(float $total): float {

        if ($total >= 400.00) {
            $total = $total * 0.80;
        } elseif ($total >= 350.00 && $total < 400.00) {
            $total = $total * 0.825;
        } elseif ($total >= 300.00 && $total < 350.00) {
            $total = $total * 0.85;
        } elseif ($total >= 250.00 && $total < 300.00) {
            $total = $total * 0.875;
        } elseif ($total >= 200.00 && $total < 250.00) {
            $total = $total * 0.90;
        } elseif ($total >= 150.00 && $total < 200.00) {
            $total = $total * 0.925;
        } elseif ($total >= 100.00 && $total < 150.00) {
            $total = $total * 0.95;
        }

        return $total;

    }

    public function __showOrders(): void {
        include "../connectiondatabase/connection.php";

        $sql = "SELECT * FROM order";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $orderID = $row["orderID"];


                $objectName = "order" . $objectID;
                //$object = new Order($orderID, $);
                //$$objectName = $object;

                echo "OrderID = " . $orderID;
            }

        } else {
            echo '0 results found';  // Print 0 found
        }

        $pdo = null;
    }

}