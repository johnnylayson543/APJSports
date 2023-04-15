<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addToCart"])) {

    $itemId = $_POST ["itemId"];

    $_SESSION ["cart"][$itemId] = $itemId;


    header("Location: cart.php");
    exit;
}
?>