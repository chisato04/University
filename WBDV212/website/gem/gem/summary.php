<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["clear-cart"])) {
    // Clear the cart
    $_SESSION['cart'] = [];
    echo '<p class="success-message"> Your cart has been cleared. </p>';
}

// Check if the cart is not empty
if (!empty($_SESSION['cart'])) {
    $cartTotal = 0; // Variable to store the total price of the items in the cart
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Summary of Orders</h2>
        <form method="post" action="">
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $product): ?>
                        <tr>
                            <td><?= $product['name'] ?></td>
                            <td>₱<?= number_format($product['price'], 2) ?></td>
                        </tr>
                        <?php $cartTotal += $product['price']; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <p class="total">Total: ₱<?= number_format($cartTotal, 2) ?></p>

            <button type="submit" name="clear-cart" class="summary-button"> Clear Selected Items </button>
            <button type="submit" name="back-to-products" class="summary-button"> <a href="index.php"> All products </a> </button>
        </form>
    
    </div>
</body>
</html>
<?php
} else {
    echo '<p class="empty-cart-message">Your cart is empty. <a href="index.php"> Browse products</a></p>';
}
?>
