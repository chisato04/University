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
    <button type="submit" name="next" class=""> <a href="bracelet.php">Prev</a> </button>
    <button type="submit" name="check-out" class="check-out"> <a href="summary.php">Check Out</a> </button>
    <button type="submit" name="next" class=""> <a href="ring.php">Next</a> </button>
    </div>
</body>
</html>
