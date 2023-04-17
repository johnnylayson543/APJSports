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
     * @param OrderStaus $orderStatus
     */
    public function setOrderStatus(OrderStaus $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    public function __showCart($cart): void {

        foreach ($cart as $item){
            $item->__showItem($item->getItemID());
        }
    }
    public function __removeItem(): void {

    }

    public function __checkout(): void {

    }

    public function __calcTotal(): void {


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