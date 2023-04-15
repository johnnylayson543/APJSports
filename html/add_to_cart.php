<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addToCart"])) {

    $itemId = $_POST ["itemId"];
    $price = $_POST ["price"];
    $sport = $_POST ["sport"];

    $_SESSION ["cart"][$itemId] = $itemId;
    $_SESSION ["cart"][$sport] = $sport;
    $_SESSION ["cart"][$price] = $price;

    // Get the URL of the previous page
    $previousPage = $_SERVER['HTTP_REFERER'];

    // Redirect back to the previous page
    header("Location: $previousPage");
    
    exit;
}
?>