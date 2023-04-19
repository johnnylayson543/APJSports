<?php
require_once '../template/header.php';
require_once '../loginsession/forceloginheader.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart Checkout</title>
    <link rel="stylesheet" type="text/css" href="../css/cart.css">
</head>
<body>
<header>
    <h1>My Shopping Cart</h1>
</header>
<main>
    <h2>Checkout</h2>
    <a href="../html/index.php"><input type="button" value="Return to home" ></a>
    <form>
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="3" required></textarea>
        </div>
        <div>
            <label for="card">Credit Card:</label>
            <input type="text" id="card" name="card" required>
        </div>
        <button type="submit">Submit Order</button>
    </form>

    <?php
    $total = 0.0;

    if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) {
        foreach ($_SESSION["cart"] as $itemId => $value) {
            echo "<form method='post' action='remove_from_cart.php'>"; // Add form
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
    ?>

    <a href="../html/index.php"><input type="button" value="Return to home" ></a>
</main>
</body>
</html>

<?php
require_once '../template/footer.php';
?>
