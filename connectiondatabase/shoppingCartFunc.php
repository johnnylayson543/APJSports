<?php
$total = 0.0;

// Items gets added to the shopping cart here. You also have the option to remove them
if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) {
    foreach ($_SESSION["cart"] as $itemId => $value) {
        echo "<form method='post' action='../html/remove_from_cart.php'>"; // Add form
        echo "Item ID: "  . $itemId . " | Sport: " . $value['sport'] . " | Price: " . $value['price'] . " | Quantity: " . $value['quantity'] . "<br>"; // Display the item ID, sport, price, and quantity
        echo "<input type='hidden' name='itemId' value='" . $itemId . "'>"; // Add hidden input for item ID
        echo "<button type='submit' name='removeFromCart'>Remove</button>"; // Add remove button
        echo "</form>"; // Close form
        echo "<br>";

        // Update total
        $total += $value['price'] * $value['quantity'];
    }

    echo "Total = " . $total;

} else {
    echo "Cart is empty";
}

