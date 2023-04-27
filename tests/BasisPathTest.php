<?php

require "../classes/Order.php";
require "../classes/OrderStatus.php";

$order = new Order(0,0,"", OrderStatus::IN_PROCESS );

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

echo $order->__calcTotal($test1) . "\n";
echo $order->__calcTotal($test2) . "\n";
echo $order->__calcTotal($test3) . "\n";
echo $order->__calcTotal($test4) . "\n";
echo $order->__calcTotal($test5) . "\n";
echo $order->__calcTotal($test6) . "\n";
echo $order->__calcTotal($test7) . "\n";
echo $order->__calcTotal($test8) . "\n";
echo $order->__calcTotal($test9) . "\n";
echo $order->__calcTotal($test10). "\n";
echo $order->__calcTotal($test11). "\n";
echo $order->__calcTotal($test12). "\n";
echo $order->__calcTotal($test13). "\n";
echo $order->__calcTotal($test14). "\n";
