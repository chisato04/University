<?php
    session_start();

    $cartTotal = 0;

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["clear-cart"])) {
        // Clear the cart
        $_SESSION['cart'] = [];
    }


?>

<!DOCTYPE html>

<html>

    <head>
        <title>Landing | Luxuria</title>
        <link rel='stylesheet' type='text/css' href=styles/styles.css />
        <?php include "google-fonts.php" ?>
    </head>

    <body>
        <a href='0-shop.php' id='top'>
            10% OFF ON SILVER ITEMS DURING THIS HALLOWEEN SEASON
        </a>
        <?php require '0-header_account.php' ?>
        <article id='cart_article'>
                <div id='item_container'>
                    <?php  // Check if the cart is not empty
                        if (!empty($_SESSION['cart'])) {
                            $cartTotal = 0; // Variable to store the total price of the items in the cart?>
                    <?php foreach($_SESSION['cart'] as $product): ?>
                    <div class='item_card'>
                        <img src=<?= $product['image']; ?> />
                        <div class='item_content'>
                            <h1 class='sans-serif no_margin'><?= $product['name'] ?></h1>
                            <p class='sans-serif'>₱ <?= number_format($product['price'], 2)  ?></p>
                        </div>
                        <input type='checkbox' /> <?php //make is to that it only gets added to total if checkbox is checked?> 
                        <?php $cartTotal += $product['price']; ?>
                    </div>
                    <?php endforeach; ?>
                    <?php
                        } else {
                            echo '<img id=iframe src="images/animations/barren.gif" allowFullScreen />';
                            echo '<p class="empty-cart-message sans-serif">Looks like your cart is empty.<br /> <a href="0-shop.php"> You can <span>browse our shop</span> to fill it back up.</a></p>';
                        }
                    ?>   
                </div>
                        
            <div id='cart_sidebar'>
                <h1 class='sans-serif no_margin no_pad'>Enjoy your purchase,<br />$firstname</h1>
                <div id='price_info' class='sans-serif'>
                    <p>Total: ₱ <?= number_format($cartTotal, 2); ?> </p>
                </div>
                <form action='' method='post'>
                    <input class='sans-serif' type='submit' name='checkout' value='Checkout' />
                    <button type="submit" name="clear-cart" class="summary-button sans-serif"> Clear Cart </button>
                </form>
            </div>
        </article>
        <?php require '0-footer.php'; ?>
    </body>
</html>
