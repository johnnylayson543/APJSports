<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["removeFromCart"])) {

    $itemId = $_POST["itemId"];

    if (isset($_SESSION["cart"][$itemId])) {
        unset($_SESSION["cart"][$itemId]); // Remove item from cart session
    }

    header("Location: cart.php");
    exit;
}
?>

