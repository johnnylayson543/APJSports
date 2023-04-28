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
echo "Test 3 adding new item to database, if INSERT INTO error shows up it means item is already in database <br> <br>";
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

echo "Test 6: Displaying all the items using the __showAllItems() function<br <br>";
$item->__showAllItems();

echo "<br> <br> Test 7: Showing select items using the __showItems() function <br> <br>";

echo "<form method='post' name='sport'>";
echo "<input type='radio' id='soccer' name='sport' value='soccer'>";
echo "<label for='soccer'>Soccer</label>";

echo "<input type='radio' id='basketball' name='sport' value='basketball'>";
echo "<label for='basketball'>Basketball</label>";

echo "<input type='radio' id='hurling' name='sport' value='hurling'>";
echo "<label for='hurling'>Hurling</label>";

echo "<input type='radio' id='gaa' name='sport' value='gaa'>";
echo "<label for='gaa'>Gaa</label>";

echo "<input type='radio' id='swimming' name='sport' value='swimming'>";
echo "<label for='swimming'>Swimming</label>";

echo "<input type='radio' id='boxing' name='sport' value='boxing'>";
echo "<label for='boxing'>Boxing</label>";
echo "<input type='submit' value='Run Test'>";
echo "</form>";

if (isset($_POST['sport'])){
    $sport = $_POST['sport'];
    $item->__showItems($sport);
}