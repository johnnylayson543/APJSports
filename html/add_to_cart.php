<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addToCart"])) {

    $itemId = $_POST ["itemId"];
    $price = $_POST ["price"];
    $sport = $_POST ["sport"];

    $_SESSION ["cart"][$itemId] = $itemId;
    $_SESSION ["cart"][$sport] = $sport;
    $_SESSION ["cart"][$price] = $price;


    header("Location: cart.php");
    exit;
}
?>