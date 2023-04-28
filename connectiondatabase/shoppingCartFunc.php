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

        // Update total (Basis Path Test - Apply Discounts if the total amount is 100 or more)
        $total += $value['price'] * $value['quantity'];

        if ($total >= 400.00){
            $total = $total * 0.80;
        }
        elseif ($total >= 350.00 && $total < 399.99){
            $total = $total * 0.825;
        }
        elseif ($total >= 300.00 && $total < 349.99){
            $total = $total * 0.85;
        }
        elseif ($total >= 250.00 && $total < 299.99){
            $total = $total * 0.875;
        }
        elseif ($total >= 200.00 && $total < 249.99){
            $total = $total * 0.90;
        }
        elseif ($total >= 150.00 && $total < 199.99){
            $total = $total * 0.925;
        }
        elseif ($total >= 100.00 && $total < 149.99){
            $total = $total * 0.95;
        }

    }

    echo "Total = " . $total;  // Display total

} else {
    echo "Cart is empty"; // If there is nothing on the cart
}

