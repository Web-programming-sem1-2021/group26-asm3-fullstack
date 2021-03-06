<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Store</title>
    <link rel="stylesheet" href="./src/style/store.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <!-- x -->
    <link rel="stylesheet" href="./src/style/cookie.css" />
    <script src="./src/script/cookie.js" defer></script>
</head>

<body>
    <header>
        <!---Naivgation-->
        <nav>
            <div id="logo">
                <h1>PLUSE</h1>
            </div>

            <label for="drop" class="toggle">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&#9776;</label>
            <input type="checkbox" id="drop" />
            <ul class="menu">
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-2" class="toggle">Products <i class="fa fa-caret-down"></i>
                    </label>
                    <a href="#">Products<i class="fa fa-caret-down"></i></a>
                    <input type="checkbox" id="drop-2" />
                    <ul>
                        <li>
                            <a href="./browse-products-by-time-store1.html">Created Time</a>
                        </li>
                        <li>
                            <!-- Second Tier Drop Down -->
                            <label for="drop-3" class="toggle">Categories <i class="fa fa-caret-down"></i></label>
                            <a href="./browse-products-by-categories-store1.html">Categories <i class="fa fa-caret-down"></i></a>
                            <input type="checkbox" id="drop-3" />

                            <ul>
                                <li>
                                    <a href="./src/browse-products-by-categories-store1.html">Laptop</a>
                                </li>
                                <li>
                                    <a href="./src/browse-products-by-categories-store1.html">Phones</a>
                                </li>
                                <li>
                                    <a href="./src/browse-products-by-categories-store1.html">Cameras</a>
                                </li>
                                <li>
                                    <a href="./src/browse-products-by-categories-store1.html">Tablets</a>
                                </li>
                                <li>
                                    <a href="./srcbrowse-products-by-categories-store1.html">TV</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="../homepage/about-us.html">About Us</a></li>
                <li><a href="../homepage/contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="home">
        <div class="slider">
            <div class="slide active" style="background-image: url('src/storepages/images/slider1.jpg')">
                <div class="container">
                    <div class="caption">
                        <h1>Opening Sales 2021</h1>
                        <p>Upto 50% Exciting Offers</p>
                        <a href="./store-1.php">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url('src/storepages/images/slider2.png')">
                <div class="container">
                    <div class="caption">
                        <h1>New Collection 2021</h1>
                        <p>Offers upto 50%</p>
                        <a href="./store-1.php">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url('src/storepages/images/slider2.png')">
                <div class="container">
                    <div class="caption">
                        <h1>Exciting Collection 2021</h1>
                        <p>Upto 50% offer</p>
                        <a href="./store-1.php">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- controls  -->
        <div class="controls">
            <div class="prev">
            </div>
            <div class="next">></div>
        </div>

        <!-- indicators -->
        <div class="indicator"></div>
    </section>

    <!--Product of the day-->

    <div class="Cardhead">
        <h1>Product of the day</h1>
    </div>
    <div class="Product_row">
        <div class="product--col">
            <div class="product_inner">
                <img src="./src/storepages/images/iphone12.png" width="250" />
                <p>Iphone12</p>
                <p>Price $1099</p>
                <p>Updated: 12/04/2021</p>
                <button><a href="./src/product-1.php">More Detail</a></button>
                <button><a href="./src/product-1.php">Add to basket</a></button>
            </div>

            <div class="product_overlay">
                <h2>Added to basket</h2>
                <i class="fa fa-check"></i>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="product--col">
            <div class="product_inner">
                <img src="../src/storepages/images/laptop.png" width="300" />
                <p>Adventors Laptop</p>
                <p>Price $1990</p>
                <p>Updated: 12/04/2021</p>
                <button><a href="./product-1.php">More Detail</a></button>
                <button><a href="./product-1.php">Add to basket</a></button>
            </div>
            <div class="product_overlay">
                <h2>Added to basket</h2>
                <i class="fa fa-check"></i>
            </div>
        </div>
        <div class="product--col">
            <div class="product_inner">
                <img src="../src/storepages/images/iphone12.png" width="300" />
                <p>Iphone 12</p>
                <p>Price $1999</p>
                <p>Updated: 12/04/2021</p>
                <button><a href="./product-1.php">More Detail</a></button>
                <button><a href="./product-1.php">Add to basket</a></button>
            </div>
            <div class="product_overlay">
                <h2>Added to basket</h2>
                <i class="fa fa-check"></i>
            </div>
        </div>
        <div class="product--col">
            <div class="product_inner">
                <img src="../src/storepages/images/camer.png" width="300" />
                <p>Conon 70D</p>
                <p>Price $950</p>
                <p>Updated: 12/04/2021</p>
                <button><a href="./product-4.html">More Detail</a></button>
                <button><a href="./product-4.html">Add to basket</a></button>
            </div>
            <div class="product_overlay">
                <h2>Added to basket</h2>
                <i class="fa fa-check"></i>
            </div>
        </div>
        <div class="product--col">
            <div class="product_inner">
                <img src="../src/storepages/images/ipad.png" width="300" />
                <p>ipad 2021</p>
                <p>Price $1200</p>
                <p>Updated: 12/04/2021</p>
                <button><a href="./product-4.html">More Detail</a></button>
                <button><a href="./product-4.html">Add to basket</a></button>
            </div>
            <div class="product_overlay">
                <h2>Added to basket</h2>
                <i class="fa fa-check"></i>
            </div>
        </div>
        <div class="product--col">
            <div class="product_inner">
                <img src="../src/storepages/images/tv.png" width="300" />
                <p>LED Smart TV</p>
                <p>Price $950</p>
                <p>Updated: 12/04/2021</p>
                <button><a href="./product-4.html">More Detail</a></button>
                <button><a href="./product-4.html">Add to basket</a></button>
            </div>
            <div class="product_overlay">
                <h2>Added to basket</h2>
                <i class="fa fa-check"></i>
            </div>
        </div>
        <div class="product--col">
            <div class="product_inner">
                <img src="../src/storepages/images/ipad.png" width="300" />
                <p>ipad 2021</p>
                <p>Price $1200</p>
                <p>Updated: 12/04/2021</p>
                <button><a href="./product-4.html">More Detail</a></button>
                <button><a href="./product-4.html">Add to basket</a></button>
            </div>
            <div class="product_overlay">
                <h2>Added to basket</h2>
                <i class="fa fa-check"></i>
            </div>
        </div>
        <div class="product--col">
            <div class="product_inner">
                <img src="../src/storepages/images/iphone12.png" width="300" />
                <p>Iphone 12</p>
                <p>Price $1999</p>
                <p>Updated: 12/04/2021</p>
                <button><a href="./product-1.php">More Detail</a></button>
                <button><a href="./product-1.php">Add to basket</a></button>
            </div>
            <div class="product_overlay">
                <h2>Added to basket</h2>
                <i class="fa fa-check"></i>
            </div>
        </div>
        <div class="product--col">
            <div class="product_inner">
                <img src="../src/storepages/images/laptop.png" width="300" />
                <p>Laptop</p>
                <p>Price $1999</p>
                <p>Updated: 12/04/2021</p>
                <button><a href="./product-1.php">More Detail</a></button>
                <button><a href="./product-1.php">Add to basket</a></button>
            </div>
            <div class="product_overlay">
                <h2>Added to basket</h2>
                <i class="fa fa-check"></i>
            </div>
        </div>
    </div>

    <!--New products-->
    <div class="Cardhead">
        <h1>New Products</h1>
    </div>
    <div class="carousel">
        <div class="item">
            <img src="../src/storepages/images/ipad.png" alt="Avatar" style="width: 100%; padding: 0px" />
            <div class="card-container">
                <h4><b>Ipad 2021</b></h4>
                <p>Price:$1290</p>
                <button><a href="./product-4.html">Add to basket</a></button>
            </div>
        </div>

        <div class="item">
            <img src="../src/storepages/images/camer.png" alt="Avatar" style="width: 100%; padding: 0px" />
            <div class="card-container">
                <h4><b>Canon 70d</b></h4>
                <p>Price:$1760</p>
                <button><a href="./product-1.php">Add to basket</a></button>
            </div>
        </div>

        <div class="item">
            <img src="../src/storepages/images/iphone12.png" alt="Avatar" style="width: 100%; padding: 0px" />
            <div class="card-container">
                <br /><br /><br />
                <h4><b>iphone 12</b></h4>
                <p>Price:$1350</p>
                <button><a href="./product-1.php">Add to basket</a></button>
            </div>
        </div>
        <div class="item">
            <img src="../src/storepages/images/tv.png" alt="Avatar" style="width: 100%; padding: 0px" />
            <div class="card-container">
                <br /><br /><br />
                <h4><b>Avendous Laptop</b></h4>
                <p>Price:$1990</p>
                <button><a href="./product-1.php">Add to basket</a></button>
            </div>
        </div>

        <div class="item">
            <img src="../src/storepages/images/ipad.png" alt="Avatar" style="width: 100%; padding: 0px" />
            <div class="card-container">
                <h4><b>Ipad 2021</b></h4>
                <p>Price:$1290</p>
                <button><a href="./product-4.html">Add to basket</a></button>
            </div>
        </div>

        <div class="item">
            <img src="../src/storepages/images/camer.png" alt="Avatar" style="width: 100%; padding: 0px" />
            <div class="card-container">
                <h4><b>Canon 70d</b></h4>
                <p>Price:$1760</p>
                <button><a href="./product-1.php">Add to basket</a></button>
            </div>
        </div>

        <div class="item">
            <img src="../src/storepages/images/iphone12.png" alt="Avatar" style="width: 100%; padding: 0px" />
            <div class="card-container">
                <br /><br /><br />
                <h4><b>iphone 12</b></h4>
                <p>Price:$1350</p>
                <button><a href="./product-1.php">Add to basket</a></button>
            </div>
        </div>

        <div class="item">
            <img src="../src/storepages/images/laptop.png" alt="Avatar" style="width: 100%; padding: 0px" />
            <div class="card-container">
                <br /><br /><br />
                <h4><b>Avendous Laptop</b></h4>
                <p>Price:$2100</p>
                <button><a href="./product-1.php">Add to basket</a></button>
            </div>
        </div>
        <div class="item">
            <img src="../src/storepages/images/laptop.png" alt="Avatar" style="width: 100%; padding: 0px" />
            <div class="card-container">
                <br /><br /><br />
                <h4><b>Avendous Laptop</b></h4>
                <p>Price:$2100</p>
                <button><a href="./product-1.php">Add to basket</a></button>
            </div>
        </div>

        <div class="item">
            <img src="../src/storepages/images/tv.png" alt="Avatar" style="width: 100%; padding: 0px" />
            <div class="card-container">
                <br /><br /><br />
                <h4><b>Avendous Laptop</b></h4>
                <p>Price:$1990</p>
                <button><a href="./product-1.php">Add to basket</a></button>
            </div>
        </div>

        <div class="item">
            <img src="../src/storepages/images/ipad.png" alt="Avatar" style="width: 100%; padding: 0px" />
            <div class="card-container">
                <h4><b>Ipad 2021</b></h4>
                <p>Price:$1290</p>
                <button><a href="./product-4.html">Add to basket</a></button>
            </div>
        </div>

        <div class="item">
            <img src="../src/storepages/images/camer.png" alt="Avatar" style="width: 100%; padding: 0px" />
            <div class="card-container">
                <h4><b>Canon 70d</b></h4>
                <p>Price:$1760</p>
                <button><a href="./product-1.php">Add to basket</a></button>
            </div>
        </div>

        <div class="item">
            <img src="../src/storepages/images/iphone12.png" alt="Avatar" style="width: 100%; padding: 0px" />
            <div class="card-container">
                <br /><br /><br />
                <h4><b>iphone 12</b></h4>
                <p>Price:$1350</p>
                <button><a href="./product-1.php">Add to basket</a></button>
            </div>
        </div>

        <div class="item">
            <img src="../src/storepages/images/laptop.png" alt="Avatar" style="width: 100%; padding: 0px" />
            <div class="card-container">
                <br /><br /><br />
                <h4><b>Avendous Laptop</b></h4>
                <p>Price:$2100</p>
                <button><a href="./product-1.php">Add to basket</a></button>
            </div>
        </div>
    </div>

    <div class="Cardhead">
        <h1>Featured Products</h1>
    </div>
    <div class="carousel">
        <div class="item">
            <!-- <img src="../src/storepages/images/ipad.png" alt="Avatar" style="width: 100%; padding: 0px" />
            <div class="card-container">
                <button><a href="./product-4.html">Add to basket</a></button>
            </div> -->
            <div class="card-container"> <?php include "./src/index_inc/featuredProductSlider.php"; ?>
            </div>

        </div>
    </div>

    <br />

    <!--  FOOTER START -->
    <footer>
        <div class="footer">
            <div class="inner-footer">
                <!--  for company name and description -->
                <div class="footer-items">
                    <a href="./store-1.php"><img class="logo-img" src="./images/logo-white.png" alt="Logo" style="width: 100%" /></a>
                </div>

                <!--  for quick links  -->
                <div class="footer-items">
                    <h3>Find It Fast</h3>
                    <div class="border1"></div>
                    <!--for the underline -->
                    <ul>
                        <a href="../homepage/footer/terms.html">
                            <li>Term of service</li>
                        </a>
                        <a href="../homepage/footer/privacy.html">
                            <li>Privacy Policy</li>
                        </a>
                        <a href="../homepage/contact.html">
                            <li>Contact</li>
                        </a>
                        <a href="../homepage/about-us.html">
                            <li>About Us</li>
                        </a>
                    </ul>
                </div>

                <!--  for some other links -->
                <div class="footer-items">
                    <h3>Quick Link</h3>
                    <div class="border1"></div>
                    <!--for the underline -->
                    <ul>
                        <a href="../index.html">
                            <li>Mall</li>
                        </a>
                        <a href="../homepage/browse/browse-stores-by-categories.html">
                            <li>Products</li>
                        </a>
                        <a href="../homepage/myAccount/login.html">
                            <li>My Account</li>
                        </a>
                    </ul>
                </div>

                <!--  for contact us info -->
                <div class="footer-items">
                    <h3>Opening Hours</h3>
                    <div class="border1"></div>
                    <ul>
                        <li>MON TO SAT: 8.30am to 7 pm</li>
                        <li>SUN : CLOSED</li>
                    </ul>
                </div>
            </div>

            <!--   Footer Bottom start  -->
            <div class="footer-bottom">
                Copyright &copy;<a href="../homepage/copyright.php">
                    Group 26 Semester A 2021</a>
            </div>
        </div>
    </footer>
</body>

</html>