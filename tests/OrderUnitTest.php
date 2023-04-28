<?php
// Testing the Shopping Cart and Orders


// Since the Order class wasn't fully implemented yet. This will be done and created using placeholder values
require "../classes/Order.php";
require "../classes/OrderStatus.php";
$order = new Order(1,2.35, "John",OrderStatus::ORDER_COMPLETE);

// Show Cart Function Test (test if the shopping cart is working, even if empty)
echo "Test1: Show Cart Function. <br><br>  \n \n ";
echo  $order->__showCart() . "<br> <br> \n \n"; // If "Cart is Empty" is shown, it means showCart is successfully working


// Show Total Function Test (If the value is 100 above, get a discount (high discounts as the total increases))
$mockTotal = 100.00;
echo "Test2: Show Total Function. <br><br>  \n \n ";
echo  $order->__calcTotal($mockTotal) . "<br> <br> \n \n";
