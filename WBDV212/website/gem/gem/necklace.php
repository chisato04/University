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
    <link rel="stylesheet" href="./css/style.css">
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
                <form method="post" action="">
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
    <button type="submit" name="next" class=""> <a href="index.php">Prev</a> </button>
    <button type="submit" name="check-out" class="check-out"> <a href="summary.php">Check Out</a> </button>
    <button type="submit" name="next" class=""> <a href="bracelet.php">Next</a> </button>
    </div>
</body>
</html>
