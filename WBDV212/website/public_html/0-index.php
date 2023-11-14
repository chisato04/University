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
        <article>
            <div id=main>
                <img src='images/Luxuria-main-Final-whiteONLY.svg' alt='The brand logo of the website.'/>
                    <!-- <a href=0-login.php><div class=signup_button>Sign-In</div></a> -->
                <h1>Luxury lies in the little things.</h1>
                <p>
                Looking for memorabilias that'll last generations?<br />
                Stylish and comfortable accessories for everyday wear?<br />
                An unforgettable gesture for the soon to be love of your life?<br />
                </p>
                <p><a href='0-shop.php'>Shop Now</a> and find the perfect piece in mere minutes.<br /></p>
                <div class='more'>
                    More &darr;
                </div>
            </div>

            <div id=nav_container>
                <h1 class='sans-serif no_pad home_heading'>DISCOVER</h1>
                <div id='nav_box_wrap'>
                    <div class='nav_box no_pad'>
                        <h2 class=playfair_display_head'>Our Story</h1>
                        <p>From the depths of the earth into the hands of some of the best craftsmen in the world, 
                            learn how this glimmering empire of treasures came to be.</p>
                        <a href=0-about.php#our_story><div class='nav_box_button sans-serif'>Read</div></a>
                    </div>
                    <div class='nav_box mid_box' >
                        <h2 class=playfair_display_head'>Shop</h1>
                        <p>Items ranging from silver to gold to gemstones to diamonds, all displaying
                            brilliant quality and luster.
                        </p>
                        <a href=0-shop.php><div class='nav_box_button sans-serif'>Buy</div></a>
                    </div>
                    <div class=nav_box> 
                        <h2 class=playfair_display_head'>Showcase</h1>
                        <p>Have a peek of our most fascinating photographs from past collections and in recent times.</p>
                        <a href=0-gallery.php><div class='nav_box_button sans-serif'>Browse</div></a>
                    </div>
                </div>
            </div>

            <div id='main_content_box'>

                <div id='featured'>
                    <h1 class='sans-serif no_pad home_heading'>FEATURED</h1>
                    <div id='featured_container'>
                        <div class='product_card'>
                            <img src='images/Products/roseGold-ChainNecklace-pexels-the-glorious-studio-14111397.jpg' />
                            <div class='featured_content'>
                                <h2 class='sans-serif'>Necklace - Gold Chain (Rose Gold)</h2> <!--will replace with php-->
                                <p class='sans-serif' id='description'>Made of real 24K gold while remaining light and comfortable. 
                                    Suitable for everyday wear.</p>
                                <p class='sans-serif price'>Enter Price</p>
                                <a href='' target="_blank" class='sans-serif'>View Product</a>
                            </div>
                        </div>
                        <div class='product_card'>
                            <img src='' />
                            <div class='featured_content'>
                                <h2 class='sans-serif'>Product Name</h2> <!--will replace with php-->
                                <p class='sans-serif' id='description'>Product description.</p>
                                <p class='sans-serif price'>Enter Price</p>
                            </div>
                            <a href='' target="_blank" class='sans-serif'>View Product</a>
                        </div>
                        <div class='product_card'>
                            <img src='' />
                            <div class='featured_content'>
                                <h2 class='sans-serif'>Product Name</h2> <!--will replace with php-->
                                <p class='sans-serif' id='description'>Product description.</p>
                                <p class='sans-serif price'>Enter Price</p>
                            </div>
                            <a href='' target="_blank" class='sans-serif'>View Product</a>
                        </div>
                    </div>
                </div>

                <div>
                </div>

            </div>

            <div id=awards>
                <img src='images/Awards/AWARDS-jewelleryMasterpiece.svg' alt='An Award from the Jewellery Masterpiece Awards' />
                <img src='images/Awards/AWARDS-theGemAwardsClean.png' alt='Recognition from the 17th Annual Gem Awards' />
                <p class='sans-serif'>... and more to come</p>
            </div>

        </article>
        <?php require '0-footer.php'; ?>
    </body>

</html>