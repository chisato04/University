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
    <button type="submit" name="next" class=""> <a href="earrings.php">Prev</a> </button>
    <button type="submit" name="check-out" class="check-out"> <a href="summary.php">Check Out</a> </button>
    
    </div>
</body>
</html>
