<?php
// use Item;
use loginsession\sanitizer;
require_once '../loginsession/sanitizer.php';
// If the Create button is pressed
if(isset($_POST['Create']))
{
    // Create a new sanitizer
    $sanitizer = new sanitizer();

    // Sanitize POST requests and assign them to variables
    $itemID = $sanitizer->sanitize($_POST['ItemID']);
    $price = $sanitizer->sanitize($_POST['Price']);
    $image = $sanitizer->sanitize($_POST['Image']);
    $stock = $sanitizer->sanitize($_POST['Stock']);
    $sport = $sanitizer->sanitize($_POST['Sport']);

    // Create a new Item and pass the variables on the constructor
    $create_item = new Item($itemID, $price, $image, $stock, $sport);

    // Use the createItem function on the Item class (pass the variables as parameters) to create the new items
    $create_item->createItem($itemID, $price, $image, $stock, $sport);
}
