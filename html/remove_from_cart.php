<?php

require "../classes/Item.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["removeFromCart"])) {

    $itemId = $_POST["itemId"];

    $item = new Item($itemId,0,"",0,"");

    if (isset($_SESSION["cart"][$itemId])) {
        $_SESSION["cart"][$itemId]["quantity"]--;
        //unset($_SESSION["cart"][$itemId]);// Remove item from cart session
        $item->__incStock($itemId,1);
    }

    header("Location: cart.php");
    exit;
}
?>

