<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addToCart"])) {

    $itemId = $_POST["itemId"];
    $price = $_POST["price"];
    $sport = $_POST["sport"];



    // Check if the item is already in the cart
    if(isset($_SESSION["cart"][$itemId])) {
        // Increase the quantity of the item in the cart
        $_SESSION["cart"][$itemId]["quantity"]++;
    } else {
        // Add the item to the cart
        $_SESSION["cart"][$itemId] = array(
            "itemId" => $itemId,
            "sport" => $sport,
            "price" => $price,
            "quantity" => 1
        );

    }

    // Get the URL of the previous page
    $previousPage = $_SERVER['HTTP_REFERER'];

    // Redirect back to the previous page
    header("Location: $previousPage");

    exit;
}
?>
