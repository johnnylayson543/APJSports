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
    <body>
    <div class="container">
        <header>
            <h1>Checkout</h1>
        </header>
        <main>
            <?php require "../connectiondatabase/shoppingCartFunc.php"?>


            <br><br>
            <form>
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>

                <label for="address">Shipping Address</label>
                <textarea id="address" name="address" rows="3" required></textarea>

                <label for="card">Credit Card Number</label>
                <input type="text" id="card" name="card" required>

                <label for="expiration">Expiration Date</label>
                <input type="text" id="expiration" name="expiration" placeholder="MM/YY" required>

                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" required>

                <button type="submit">Submit</button>
            </form>
        </main>
    </div>
    </body>




    <a href="../html/index.php"><input type="button" value="Return to home" ></a>
</main>
</body>
</html>

<?php
require_once '../template/footer.php';
?>
