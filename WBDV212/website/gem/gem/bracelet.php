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
            
    <button type="submit" name="next" class=""> <a href="necklace.php">Prev</a> </button>
    <button type="submit" name="check-out" class="check-out"> <a href="summary.php">Check Out</a> </button>
    <button type="submit" name="next" class=""> <a href="earrings.php">Next</a> </button>
    </div>
</body>
</html>
