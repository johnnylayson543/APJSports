<?php
 use Item;
class Order
{
    private int $orderID;
    private double $price;
    private String $customerName;
    private OrderStaus $orderStatus;

    private array $cart;




    /**
     * @param int $orderID
     * @param float $price
     * @param String $customerName
     * @param OrderStaus $orderStatus
     */
    public function __construct(int $orderID, float $price, string $customerName, OrderStaus $orderStatus)
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

    public function __showCart(): void {

    }
    public function __removeItem(): void {

    }

    public function __checkout(): void {

    }

    public function __calcTotal(): void {


    }

}