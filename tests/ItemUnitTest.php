<?php




//making some test variables
$testId = 1000;
$testPrice = 100.00;
$testImage = "test";
$testStock = 40;
$testSport = "soccer";

//testing to see if item can be created
$item = new Item(0,0,"blank", 0, "");

//printing a blank item object
echo "Test1: Creating a new object. <br><br>  \n \n ";
//echo $item;

//testing getters and setters for Item.php
echo "Test 2: Testing all the getters and setters <br> <br> \n \n";
$item->setItemID($testId);
echo $item->getItemID() . "<br> \n";

$item->setPrice($testPrice);
echo $item->getPrice() . "<br> \n";

$item->setImage($testImage);
echo  $item->getImage() . "<br> \n";

$item->setStock($testStock);
echo $item->getStock() . "<br> \n";

$item->setSport($testSport);
echo $item->getSport(). "<br> <br> \n \n";


//testing adding item to database
echo "Test 3 adding new item to database <br> <br>";
$item->createItem($item->getItemID(), $item->getPrice(), $item->getImage(), $item->getStock(), $item->getSport());


//testing methods/functions
echo "Test 4: Decreasing stock of an item by 10 using __decStock()". "<br> <br> \n". "\n";
echo "Stock before test =" . $item->getStock() . "<br>\n";
$item->setStock($item->__decStock($item->getItemID(), 10));
echo "Stock after test = " . $item->getStock() . "<br> <br> \n \n";

echo "Test 5: Increasing stock of an item by 10 using __incStock()". "<br> <br> \n". "\n";
echo "Stock before test =" . $item->getStock() . "<br> \n";
$item->setStock($item->__incStock($item->getItemID(), 10));
echo "Stock after test = " . $item->getStock() . "<br> <br> \n \n";