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

echo "Test1: value = 10.00, expected result = 10.00, result = " . $order->__calcTotal($test1) . "\n";
echo "Test2: value = 100.00, expected result = 95.00, result = " . $order->__calcTotal($test2) . "\n";
echo "Test3: value = 140.00, expected result = 133.00, result = " . $order->__calcTotal($test3) . "\n";
echo "Test4: value = 149.00, expected result = 141.55, result = " . $order->__calcTotal($test4) . "\n";
echo "Test5: value = 150.00, expected result = 138.75, result = " . $order->__calcTotal($test5) . "\n";
echo "Test6: value = 151.00, expected result = 139.675, result = " . $order->__calcTotal($test6) . "\n";
echo "Test7: value = 199.99, expected result = 184.991, result = " . $order->__calcTotal($test7) . "\n";
echo "Test8: value = 200.00, expected result = 180.00, result = " . $order->__calcTotal($test8) . "\n";
echo "Test9: value = 240.00, expected result = 216.00, result = " . $order->__calcTotal($test9) . "\n";
echo "Test10: value = 250.00, expected result = 218.75, result = " . $order->__calcTotal($test10). "\n";
echo "Test11: value = 300.00, expected result = 255.00, result = " . $order->__calcTotal($test11). "\n";
echo "Test12: value = 350.00, expected result = 288.75, result = " . $order->__calcTotal($test12). "\n";
echo "Test13: value = 380.00, expected result = 313.50, result = " . $order->__calcTotal($test13). "\n";
echo "Test14: value = 400.00, expected result = 320.00, result = " . $order->__calcTotal($test14). "\n";
