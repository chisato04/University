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
        
        
        
        <div class="product">
            <img src="images/products/pearlneck3.jpg" alt="Product Image">
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
            <img src="images/products/cateyeneck.webp" alt="Product Image">
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
            <img src="images/products/heartneck.webp" alt="Product Image">
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
            <img src="images/products/paperclipneck.jpg" alt="Product Image">
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
            <img src="images/products/lotus.webp" alt="Product Image">
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
            <img src="images/products/seashell.webp" alt="Product Image">
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
            <img src="images/products/pinwheel.webp" alt="Product Image">
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
            <img src="images/products/janneck.webp" alt="Product Image">
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
            <img src="images/products/febneck.jpg" alt="Product Image">
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
            <img src="images/products/marchneck.webp" alt="Product Image">
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
            <img src="images/products/aprilneck.jpg" alt="Product Image">
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
            <img src="images/products/mayneck.jpg" alt="Product Image">
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
            <img src="images/products/juneneck.webp" alt="Product Image">
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
            <img src="images/products/julyneck.webp" alt="Product Image">
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
            <img src="images/products/augustneck.jpg" alt="Product Image">
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
            <img src="images/products/septneck.webp" alt="Product Image">
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
            <img src="images/products/octneck.webp" alt="Product Image">
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
            <img src="images/products/novneck.webp" alt="Product Image">
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
            <img src="images/products/decneck.webp" alt="Product Image">
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
            <img src="images/products/aurora.jpg" alt="Product Image">
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
            <img src="images/products/denise.webp" alt="Product Image">
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
            <img src="images/products/celestine.webp" alt="Product Image">
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
            <img src="images/products/liberty.jpg" alt="Product Image">
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
            <img src="images/products/rosary.jpg" alt="Product Image">
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
            <img src="images/products/damascus.webp" alt="Product Image">
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
            <img src="images/products/paperclipbracelet.webp" alt="Product Image">
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
            <img src="images/products/luckylotus.webp" alt="Product Image">
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
            <img src="images/products/bamboo.webp" alt="Product Image">
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
            <img src="images/products/piyao.webp" alt="Product Image">
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
            <img src="images/products/padlock.webp" alt="Product Image">
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
            <img src="images/products/airplane.webp" alt="Product Image">
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
            <img src="images/products/cross.webp" alt="Product Image">
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
            <img src="images/products/anchor.webp" alt="Product Image">
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
            <img src="images/products/gclef.webp" alt="Product Image">
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
            <img src="images/products/captwheel.webp" alt="Product Image">
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
            <img src="images/products/janbr.jpg" alt="Product Image">
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
            <img src="images/products/febbr.jpg" alt="Product Image">
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
            <img src="images/products/marbr.jpg" alt="Product Image">
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
            <img src="images/products/aprbr.webp" alt="Product Image">
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
            <img src="images/products/maybr.jpg" alt="Product Image">
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
            <img src="images/products/junebr.jpg" alt="Product Image">
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
            <img src="images/products/julybr.jpg" alt="Product Image">
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
            <img src="images/products/augbr.jpg" alt="Product Image">
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
            <img src="images/products/septbr.jpg" alt="Product Image">
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
            <img src="images/products/octbr.jpg" alt="Product Image">
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
            <img src="images/products/novbr.webp" alt="Product Image">
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
            <img src="images/products/decbr.jpg" />
            <div class="product-details">
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
        </div>

                    </div> <!--product container-->
                </div> <!--product page-->

            </article>
            <?php require '0-footer.php'; ?>
        </body>
    </html>