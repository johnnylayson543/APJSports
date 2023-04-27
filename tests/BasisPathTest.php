<?php

require "../classes/Order.php";

$order = new Order(0,0,null, OrderStatus::IN_PROCESS );

$test1 = 10.00;
$test2 = 100.00;
$test3 = 140.00;
$test4 = 149.00;
$test5 = 150.00;
$test6 = 151.00;
$test7 = 199.99;
$test8 = 200.00;
$test9 = 240.00;
$test10 = 250.00;
$test11 = 300.00;
$test12 = 350.00;
$test13 = 380.00;
$test14 = 400.00;

echo $order->__calcTotal($test1);
echo $order->__calcTotal($test2);
echo $order->__calcTotal($test3);
echo $order->__calcTotal($test4);
echo $order->__calcTotal($test5);
echo $order->__calcTotal($test6);
echo $order->__calcTotal($test7);
echo $order->__calcTotal($test8);
echo $order->__calcTotal($test9);
echo $order->__calcTotal($test10);
echo $order->__calcTotal($test11);
echo $order->__calcTotal($test12);
echo $order->__calcTotal($test13);
echo $order->__calcTotal($test14);
