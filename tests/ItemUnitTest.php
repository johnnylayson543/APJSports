<?php

require "../classes/Item.php";

//making some test variables
$testId = 1000;
$testPrice = 100.00;
$testImage = "test";
$testStock = 40;
$testSport = "soccer";

//testing to see if item can be created
$item = new Item(0,0,"blank", 0, "");

//printing a blank item object
echo "Test1: Creating a new object and printing its values. \n \n ";
echo $item;

//testing getters and setters for Item.php
echo "Test 2: Testing all the getters and setters \n \n";
$item->setItemID($testId);
echo $item->getItemID() . "\n";

$item->setPrice($testPrice);
echo $item->sgetPrice() . "\n";

$item->setImage($testImage);
echo  $item->getImage() . "\n";

$item->setStock($testStock);
echo $item->getStock() . "\n";

$item->setSport($testSport);
echo $item->getSport(). "\n \n";


//testing methods/functions
echo "Test 3: Decreasing stock of an item by 10 using __decStock()". "\n". "\n";
echo "Stock before test =" . $item->getStock() . "\n";
$item->__decStock(1000, 10);
echo "Stock after test = " . $item->getStock() . "\n \n";

echo "Test 4: Increasing stock of an item by 10 using __incStock()". "\n". "\n";
echo "Stock before test =" . $item->getStock() . "\n";
$item->__incStock(1000, 10);
echo "Stock after test = " . $item->getStock() . "\n \n";