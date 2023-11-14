<?php
session_start();

// Initialize the cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add-to-cart"])) {
    // Get the product details from the form
    $productId = $_POST["product-id"];
    $productName = $_POST["product-name"];
    $productPrice = $_POST["product-price"];

    // Check if the product is already in the cart
    $productExists = false;
    foreach ($_SESSION['cart'] as $product) {
        if ($product['id'] == $productId) {
            $productExists = true;
            break;
        }
    }

    if ($productExists) {
        // Product already added, display alert message
        echo '<script>alert("Product is already added to the cart!");</script>';
    } else {
        // Add the product to the cart
        $product = [
            'id' => $productId,
            'name' => $productName,
            'price' => $productPrice,
        ];
        $_SESSION['cart'][] = $product;

        // Display success message
        echo '<p>Product added to the cart!</p>';
    }
}
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
        <!-- PEARL -->
        <div class="product">
            <img src="./img/pearlneck.jfif" alt="Product Image">
            <div class="product-details">
                <div class="product-title">White Classic Pearl Necklace</div>
                <div class="product-description">Elegance meets timeless beauty with our exquisite pearl necklace.</div>
                <div class="product-price">₱1,500.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="White Classic Pearl">
                    <input type="hidden" name="product-price" value="1500.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
                </div>
        </div>
        <div class="product">
            <img src="./img/pearlneck1.jfif" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Fresh Water Pearl Necklace</div>
                <div class="product-description">Elegance meets timeless beauty with our exquisite pearl necklace.</div>
                <div class="product-price">₱2,000.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Fresh Water Pearl">
                    <input type="hidden" name="product-price" value="2000.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
                </div>
        </div>
        <div class="product">
            <img src="./img/pearlneck2.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Double Strand Pearl Necklace</div>
                <div class="product-description">Elegance meets timeless beauty with our exquisite pearl necklace.</div>
                <div class="product-price">₱2,500.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Double Strand">
                    <input type="hidden" name="product-price" value="2500.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
                </div>
        </div>
        <div class="product">
            <img src="./img/pearlneck3.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Multi-strand Unknotted Pearl Necklace</div>
                <div class="product-description">Elegance meets timeless beauty with our exquisite pearl necklace.</div>
                <div class="product-price">₱3,000.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Multi-strand Unknotted">
                    <input type="hidden" name="product-price" value="3000.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
                </div>
        </div>
        <!-- GOLD CHAIN -->
        <div class="product">
            <img src="./img/cateyeneck.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">18K Gold Cat Eye</div>
                <div class="product-description"></div>
                <div class="product-price">₱6,500.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="18K Gold Cat Eye">
                    <input type="hidden" name="product-price" value="6500.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/heartneck.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">18K Gold Heart</div>
                <div class="product-description"></div>
                <div class="product-price">₱11,875.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="18K Gold Heart">
                    <input type="hidden" name="product-price" value="11875.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/paperclipneck.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">18K Gold Paperclip Chain</div>
                <div class="product-description"></div>
                <div class="product-price">₱22,000.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="18K Gold Paperclip">
                    <input type="hidden" name="product-price" value="22000.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/lotus.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">24k Gold Lotus</div>
                <div class="product-description"></div>
                <div class="product-price">₱5,999.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="24K Gold Lotus">
                    <input type="hidden" name="product-price" value="5999.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/seashell.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">24k Gold Seashell</div>
                <div class="product-description"></div>
                <div class="product-price">₱5,999.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="24K Gold Seashell">
                    <input type="hidden" name="product-price" value="5999.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/pinwheel.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">24k Gold Pinwheel</div>
                <div class="product-description"></div>
                <div class="product-price">₱6,999.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="24K Gold Pinwheel">
                    <input type="hidden" name="product-price" value="6999.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <!-- MONTHLY -->
        <div class="product">
            <img src="./img/janneck.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">January</div>
                <div class="product-description"></div>
                <div class="product-price">₱490.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="January">
                    <input type="hidden" name="product-price" value="490.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/febneck.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">February</div>
                <div class="product-description"></div>
                <div class="product-price">₱490.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="February">
                    <input type="hidden" name="product-price" value="490.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/marchneck.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">March</div>
                <div class="product-description"></div>
                <div class="product-price">₱490.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="March">
                    <input type="hidden" name="product-price" value="490.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/aprilneck.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">April</div>
                <div class="product-description"></div>
                <div class="product-price">₱490.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="April">
                    <input type="hidden" name="product-price" value="490.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/mayneck.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">May</div>
                <div class="product-description"></div>
                <div class="product-price">₱490.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="May">
                    <input type="hidden" name="product-price" value="490.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/juneneck.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">June</div>
                <div class="product-description"></div>
                <div class="product-price">₱490.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="June">
                    <input type="hidden" name="product-price" value="490.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/julyneck.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">July</div>
                <div class="product-description"></div>
                <div class="product-price">₱490.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="July">
                    <input type="hidden" name="product-price" value="490.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/augustneck.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">August</div>
                <div class="product-description"></div>
                <div class="product-price">₱490.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="August">
                    <input type="hidden" name="product-price" value="490.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/septneck.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">September</div>
                <div class="product-description"></div>
                <div class="product-price">₱490.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="September">
                    <input type="hidden" name="product-price" value="490.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/octneck.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">October</div>
                <div class="product-description"></div>
                <div class="product-price">₱490.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="October">
                    <input type="hidden" name="product-price" value="490.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/novneck.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">November</div>
                <div class="product-description"></div>
                <div class="product-price">₱490.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="November">
                    <input type="hidden" name="product-price" value="490.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/decneck.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">December</div>
                <div class="product-description"></div>
                <div class="product-price">₱490.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="December">
                    <input type="hidden" name="product-price" value="490.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
    
    <!------BRACELET---------------->
    <!-- PEARL -->
    <div class="product">
            <img src="./img/aurora.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Aurora</div>
                <div class="product-description"></div>
                <div class="product-price">₱1,150.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Aurora">
                    <input type="hidden" name="product-price" value="1150.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
                </div>
        </div>
        <div class="product">
            <img src="./img/denise.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Denise</div>
                <div class="product-description"></div>
                <div class="product-price">₱1,050.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Denise">
                    <input type="hidden" name="product-price" value="1050.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
                </div>
        </div>
        <div class="product">
            <img src="./img/celestine.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Celestine </div>
                <div class="product-description"></div>
                <div class="product-price">₱1,150.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Celestine">
                    <input type="hidden" name="product-price" value="1150.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
                </div>
        </div>
        <div class="product">
            <img src="./img/liberty.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Liberty</div>
                <div class="product-description"></div>
                <div class="product-price">₱1,450.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Liberty">
                    <input type="hidden" name="product-price" value="1450.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
                </div>
        </div>
        <!-- GOLD CHAIN -->
        <div class="product">
            <img src="./img/rosary.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">18K Rosary</div>
                <div class="product-description"></div>
                <div class="product-price">₱11,999.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="18K Rosary">
                    <input type="hidden" name="product-price" value="11999.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/damascus.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">18K Damascus Chain</div>
                <div class="product-description"></div>
                <div class="product-price">₱12,999.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="18K Damascus Chain">
                    <input type="hidden" name="product-price" value="12999.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/paperclipbracelet.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">18K Lucky Paperclip Chain</div>
                <div class="product-description"></div>
                <div class="product-price">₱12,999.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="18K Lucky Paperclip">
                    <input type="hidden" name="product-price" value="12999.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/luckylotus.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">24k Lucky Lotus</div>
                <div class="product-description"></div>
                <div class="product-price">₱14,999.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="24K Lucky Lotus">
                    <input type="hidden" name="product-price" value="14999.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/bamboo.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">24k Bamboo</div>
                <div class="product-description"></div>
                <div class="product-price">₱17,999.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="24K Bamboo">
                    <input type="hidden" name="product-price" value="17999.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/piyao.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">24k Double Money Catcher</div>
                <div class="product-description"></div>
                <div class="product-price">₱49,999.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="24K Double Money Catcher">
                    <input type="hidden" name="product-price" value="49999.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
       <!-- CHARM -->
        <div class="product">
            <img src="./img/padlock.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Padlock</div>
                <div class="product-description"></div>
                <div class="product-price">₱390.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Padlock">
                    <input type="hidden" name="product-price" value="390.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/airplane.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Airplane</div>
                <div class="product-description"></div>
                <div class="product-price">₱890.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Airplane">
                    <input type="hidden" name="product-price" value="890.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/cross.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Cross</div>
                <div class="product-description"></div>
                <div class="product-price">₱750.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Cross">
                    <input type="hidden" name="product-price" value="750.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/anchor.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Anchor</div>
                <div class="product-description"></div>
                <div class="product-price">750.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Anchor">
                    <input type="hidden" name="product-price" value="750.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/gclef.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">G-clef</div>
                <div class="product-description"></div>
                <div class="product-price">₱770.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="G-clef">
                    <input type="hidden" name="product-price" value="770.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/captwheel.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Captain Wheel</div>
                <div class="product-description"></div>
                <div class="product-price">₱890.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Captain Wheel">
                    <input type="hidden" name="product-price" value="890.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <!-- MONTHLY -->
        <div class="product">
            <img src="./img/janbr.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">January</div>
                <div class="product-description"></div>
                <div class="product-price">₱550.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="January">
                    <input type="hidden" name="product-price" value="550.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/febbr.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">February</div>
                <div class="product-description"></div>
                <div class="product-price">₱550.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="February">
                    <input type="hidden" name="product-price" value="550.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/marbr.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">March</div>
                <div class="product-description"></div>
                <div class="product-price">₱550.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="March">
                    <input type="hidden" name="product-price" value="550.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/aprbr.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">April</div>
                <div class="product-description"></div>
                <div class="product-price">₱550.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="April">
                    <input type="hidden" name="product-price" value="550.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/maybr.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">May</div>
                <div class="product-description"></div>
                <div class="product-price">₱550.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="May">
                    <input type="hidden" name="product-price" value="550.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/junebr.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">June</div>
                <div class="product-description"></div>
                <div class="product-price">₱550.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="June">
                    <input type="hidden" name="product-price" value="550.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/julybr.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">July</div>
                <div class="product-description"></div>
                <div class="product-price">₱550.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="July">
                    <input type="hidden" name="product-price" value="550.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/augbr.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">August</div>
                <div class="product-description"></div>
                <div class="product-price">₱550.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="August">
                    <input type="hidden" name="product-price" value="550.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/septbr.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">September</div>
                <div class="product-description"></div>
                <div class="product-price">₱550.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="September">
                    <input type="hidden" name="product-price" value="550.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/octbr.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">October</div>
                <div class="product-description"></div>
                <div class="product-price">₱550.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="October">
                    <input type="hidden" name="product-price" value="550.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/novbr.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">November</div>
                <div class="product-description"></div>
                <div class="product-price">₱550.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="November">
                    <input type="hidden" name="product-price" value="550.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/decbr.jpg"product-details">
                <div class="product-title">December</div>
                <div class="product-description"></div>
                <div class="product-price">₱550.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="December">
                    <input type="hidden" name="product-price" value="550.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
            
   
    <!--------------EARRINGS--------------->
     <!-- STUD -->
     <div class="product">
            <img src="./img/heart.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Heart</div>
                <div class="product-description"></div>
                <div class="product-price">₱109.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Heart">
                    <input type="hidden" name="product-price" value="109.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
                </div>
        </div>
        <div class="product">
            <img src="./img/infinity.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Infinity</div>
                <div class="product-description"></div>
                <div class="product-price">₱200.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Infinity">
                    <input type="hidden" name="product-price" value="200.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
                </div>
        </div>
        <div class="product">
            <img src="./img/snowflakes.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Small Snowflakes </div>
                <div class="product-description"></div>
                <div class="product-price">₱229.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Small Snowflakes">
                    <input type="hidden" name="product-price" value="229.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
                </div>
        </div>

        <!-- DROP -->
        <div class="product">
            <img src="./img/bar.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Bar</div>
                <div class="product-description"></div>
                <div class="product-price">₱109.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Bar">
                    <input type="hidden" name="product-price" value="109.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/zirconia.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Zirconia</div>
                <div class="product-description"></div>
                <div class="product-price">₱12,999.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Zircon">
                    <input type="hidden" name="product-price" value="230.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/star.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Star with Ball</div>
                <div class="product-description"></div>
                <div class="product-price">₱389.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Star with Ball">
                    <input type="hidden" name="product-price" value="389.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        
       <!-- DIAMOND -->
        <div class="product">
            <img src="./img/e728w.png" alt="Product Image">
            <div class="product-details">
                <div class="product-title">.025 Carat Diamond</div>
                <div class="product-description"> White Gold E728W-A/B</div>
                <div class="product-price">₱8,500.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value=".025 Carat Diamond">
                    <input type="hidden" name="product-price" value="8500.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/JS47E.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">.03 CTW Diamond</div>
                <div class="product-description">Tricolor Gold JS47E</div>
                <div class="product-price">₱15,690.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value=".03 CTW Diamond">
                    <input type="hidden" name="product-price" value="15690.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/e523.png" alt="Product Image">
            <div class="product-details">
                <div class="product-title">.24 CTW Diamond with Blue Sapphire</div>
                <div class="product-description"> 14k White Gold E523</div>
                <div class="product-price">₱49,000.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value=".24 CTW Diamond with Blue Sapphire">
                    <input type="hidden" name="product-price" value="49000.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
            <div class="product">
            <img src="./img/e734dia.png" alt="Product Image">
            <div class="product-details">
                <div class="product-title">1.00 CTW Diamond</div>
                <div class="product-description"> 18K White Gold E734</div>
                <div class="product-price">₱38,000.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value=".24 CTW Diamond">
                    <input type="hidden" name="product-price" value="38000.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
 
    <!-------------------RING------------------->
    <!-- WEDDING -->
    <div class="product">
            <img src="./img/classic.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Classic White Gold 18k</div>
                <div class="product-description"></div>
                <div class="product-price">₱17,500.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Classic White Gold 18k">
                    <input type="hidden" name="product-price" value="17500.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
                </div>
        </div>
        <div class="product">
            <img src="./img/piers.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Piers 18k</div>
                <div class="product-description"></div>
                <div class="product-price">₱18,999.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Piers 18K">
                    <input type="hidden" name="product-price" value="18999.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
                </div>
        </div>
        <div class="product">
            <img src="./img/hidden.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Hidden Diamond and Side Engrave</div>
                <div class="product-description">18k Wedding Ring</div>
                <div class="product-price">31,999.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Hidden Diamond and Side Engrave">
                    <input type="hidden" name="product-price" value="31999.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
                </div>
</div>
        <!-- ENGAGEMENT -->
        <div class="product">
            <img src="./img/solitaire.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">925 Sterling Silver - Solitaire</div>
                <div class="product-description"></div>
                <div class="product-price">₱10,499.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="925 Sterling Silver - Solitaire">
                    <input type="hidden" name="product-price" value="10499.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/cushioncut.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">925 Sterling Silver - Moissanite</div>
                <div class="product-description">3-carat Cushion Cut</div>
                <div class="product-price">₱14,999.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="925 Sterling Silver - Moissanite">
                    <input type="hidden" name="product-price" value="14999.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/round.webp" alt="Product Image">
            <div class="product-details">
                <div class="product-title">18K Gold - Moissanite</div>
                <div class="product-description"></div>
                <div class="product-price">₱29,500.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="18K Gold - Moissanite">
                    <input type="hidden" name="product-price" value="29500.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <!-- PROMISE -->
        <div class="product">
            <img src="./img/romantix.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">925 Sterling Silver - Romantic</div>
                <div class="product-description"></div>
                <div class="product-price">₱2,393.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="925 Sterling Silver - Romantic">
                    <input type="hidden" name="product-price" value="2393.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/eternal.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">925 Sterling Silver - Eternal Love</div>
                <div class="product-description"></div>
                <div class="product-price">₱2,450.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="925 Sterling Silver - Eternal Love">
                    <input type="hidden" name="product-price" value="2450.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/gemstone.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Engraveable White Gold</div>
                <div class="product-description"></div>
                <div class="product-price">₱3,280.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Engraveable White Gold">
                    <input type="hidden" name="product-price" value="3280.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/engrave.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">Engravable White Gold</div>
                <div class="product-description"></div>
                <div class="product-price">₱2,500.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="7">
                    <input type="hidden" name="product-name" value="Engravable White Gold">
                    <input type="hidden" name="product-price" value="2500.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <!-- MONTHLY -->
        <div class="product">
            <img src="./img/janring.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">January</div>
                <div class="product-description"></div>
                <div class="product-price">₱2,039.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="January">
                    <input type="hidden" name="product-price" value="2039.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product">
            <img src="./img/febring.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">February</div>
                <div class="product-description"></div>
                <div class="product-price">₱2,039.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="February">
                    <input type="hidden" name="product-price" value="2039.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/marchring.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">March</div>
                <div class="product-description"></div>
                <div class="product-price">₱2,039.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="March">
                    <input type="hidden" name="product-price" value="2039.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/aprilring.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">April</div>
                <div class="product-description"></div>
                <div class="product-price">₱2,039.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="April">
                    <input type="hidden" name="product-price" value="2039.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/mayring.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">May</div>
                <div class="product-description"></div>
                <div class="product-price">₱2,039.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="May">
                    <input type="hidden" name="product-price" value="2039.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/junering.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">June</div>
                <div class="product-description"></div>
                <div class="product-price">₱2,039.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="June">
                    <input type="hidden" name="product-price" value="2039.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/julyring.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">July</div>
                <div class="product-description"></div>
                <div class="product-price">₱2,039.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="July">
                    <input type="hidden" name="product-price" value="2039.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/augring.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">August</div>
                <div class="product-description"></div>
                <div class="product-price">₱2,039.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="August">
                    <input type="hidden" name="product-price" value="2039.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/septring.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">September</div>
                <div class="product-description"></div>
                <div class="product-price">₱2,039.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="September">
                    <input type="hidden" name="product-price" value="2039.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/octring.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">October</div>
                <div class="product-description"></div>
                <div class="product-price">₱2,039.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="October">
                    <input type="hidden" name="product-price" value="2039.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/novring.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">November</div>
                <div class="product-description"></div>
                <div class="product-price">₱2,039.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="November">
                    <input type="hidden" name="product-price" value="2039.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
        </div>

        <div class="product">
            <img src="./img/decring.jpg" alt="Product Image">
            <div class="product-details">
                <div class="product-title">December</div>
                <div class="product-description"></div>
                <div class="product-price">₱2,039.00</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="product-id" value="13">
                    <input type="hidden" name="product-name" value="December">
                    <input type="hidden" name="product-price" value="2039.00">
                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                </form>
            </div>
</div>
    <button type="submit" name="next" class=""> <a href="">Prev</a> </button>
    <button type="submit" name="check-out" class="check-out"> <a href="summary.php">Check Out</a> </button>
    
    </div>
</body>
</html>
