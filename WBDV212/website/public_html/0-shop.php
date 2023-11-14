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
        $productImage = $_POST['product-image'];

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
                'image' => $productImage
            ];
            $_SESSION['cart'][] = $product;

            // Display success message
            // echo '<p>Product added to the cart!</p>';
        }
}
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>About | Luxuria</title>
            <link rel="stylesheet" type=text/css href="styles/styles.css" />
            <?php include "google-fonts.php" ?>
        </head>
        <body>
            <a href='0-shop.php' id='top'>
                10% OFF ON SILVER ITEMS DURING THIS HALLOWEEN SEASON
            </a>
            <?php require '0-header_account.php'; ?>
            <article id='shop_page'>
                <div class='title_block'>
                    <h1>Shop</h1>
                </div>
                <form action='' method='get' id='shop_filter'>
                    <select name='type'>
                        <option>Select Type</option>
                        <option value='necklace'>Necklaces</option>
                        <option value='bracelet'>Bracelets</option>
                        <option value='earring'>Earrings</option>
                        <option value='ring'>Rings</option>
                    </select>
                    <select name='style'>
                        <option>Select Style</option>
                        <option value='gold chain'>Gold Chain</option>
                        <option value='silver chain'>Silver Chain</option>
                        <option value='locket'>Locket</option>
                        <option value='pendant'>Pendant</option>
                        <option value='statement'>Statement</option>
                        <option value='beaded'>Beaded</option>
                        <option value='birthstone'>Birthstone</option>
                        <option value='bangle'>Bangle</option>
                        <option value='charm'>Charm</option>
                        <option value='stud'>Stud</option>
                        <option value='cluster'>Cluster</option>
                        <option value='hoop'>Hoop</option>
                        <option value='drop'>Drop</option>
                        <option value='diamond'>Diamond</option>
                    </select>
                    <select name='occasion'>
                        <option>Select Occasion</option>
                        <option value='wedding'>Wedding</option>
                        <option value='engagement'>Engagement</option>
                        <option value='promise'>Promise</option>
                    </select>
                    <div>
                        <input type=number name='min_price_range' placeholder='Min Price' min=1 max=1000000/>
                        <input type=number name='max_price_range' placeholder='Max Price' min=1 max=1000000/>
                    </div>
                    <input type=submit name='go_filter' value='Filter'/>
                </form>

                <div id='product_page'>
                    <div id='product_container'>
                        <div class="product">
                            <img src="images/products/pearlneck.jfif" alt="Product Image">
                            <div class="product-details sans-serif">
                                <div class='product-title'>White Classic Pearl Necklace</div>
                                <div class='product-description'>Elegance meets timeless beauty with our exquisite pearl necklace.</div>
                                <div class="product-price">₱1,500.00</div>
                                <form method="post" action="">
                                    <input type="hidden" name="product-id" value="7">
                                    <input type="hidden" name="product-name" value="White Classic Pearl Necklace">
                                    <input type="hidden" name="product-price" value="1500.00">
                                    <input type='hidden' name="product-image" value="images/products/pearlneck.jfif" />
                                    <button type="submit" name="add-to-cart" class="add_to_cart">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                        <div class="product">
                            <img src="images/products/pearlneck.jfif" alt="Product Image">
                            <div class="product-details">
                                <div class="product-title">White Classic Pearl Necklace</div>
                                <div class="product-description">Elegance meets timeless beauty with our exquisite pearl necklace.</div>
                                <div class="product-price">₱1,500.00</div>
                                <form method="post" action="">
                                    <input type="hidden" name="product-id" value="20">
                                    <input type="hidden" name="product-name" value="White Classic Pearl Necklace">
                                    <input type="hidden" name="product-price" value="1500.00">
                                    <input type='hidden' name="product-image" value="images/products/pearlneck.jfif" />
                                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                                </form>
                                </div>
                        </div>
                        <div class="product">
                            <img src="images/products/pearlneck1.jfif" alt="Product Image">
                            <div class="product-details">
                                <div class="product-title">Fresh Water Pearl Necklace</div>
                                <div class="product-description">Elegance meets timeless beauty with our exquisite pearl necklace.</div>
                                <div class="product-price">₱2,000.00</div>
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    <input type="hidden" name="product-id" value="9">
                                    <input type="hidden" name="product-name" value="Fresh Water Pearl Necklace">
                                    <input type="hidden" name="product-price" value="2000.00">
                                    <input type='hidden' name="product-image" value="images/products/pearlneck1.jfif" />
                                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                                </form>
                                </div>
                        </div>
                        <div class="product">
                            <img src="images/products/pearlneck2.jpg" alt="Product Image">
                            <div class="product-details">
                                <div class="product-title">Double Strand Pearl Necklace</div>
                                <div class="product-description">Elegance meets timeless beauty with our exquisite pearl necklace.</div>
                                <div class="product-price">₱2,500.00</div>
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    <input type="hidden" name="product-id" value="8">
                                    <input type="hidden" name="product-name" value="Double Strand Pearl Necklace">
                                    <input type="hidden" name="product-price" value="2500.00">
                                    <input type='hidden' name="product-image" value="images/products/pearlneck2.jpg" />
                                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                                </form>
                                </div>
                        </div>
                        <div class="product">
                            <img src="images/products/pearlneck2.jpg" alt="Product Image">
                            <div class="product-details">
                                <div class="product-title">Double Strand Pearl Necklace</div>
                                <div class="product-description">Elegance meets timeless beauty with our exquisite pearl necklace.</div>
                                <div class="product-price">₱2,500.00</div>
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    <input type="hidden" name="product-id" value="10">
                                    <input type="hidden" name="product-name" value="Double Strand Pearl Necklace">
                                    <input type="hidden" name="product-price" value="2500.00">
                                    <input type='hidden' name="product-image" value="images/products/pearlneck2.jpg" />
                                    <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                                </form>
                                </div>
                        </div>


                    </div> <!--product container-->
                </div> <!--product page-->

            </article>
            <?php require '0-footer.php'; ?>
        </body>
    </html>