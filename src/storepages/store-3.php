<!DOCTYPE html>
<html lang="en">
<?php  ?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Shopping-cart</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style/store3.css" />
    <link rel="stylesheet" href="style/reponsive.css" />
    <link rel="stylesheet" type="text/css" href="layout-category.css" />
    <link rel="stylesheet" href="store-2-style.css" />
    <link rel="stylesheet" href="/style/cookie.css" />
    <script src="./script/store3-main.js" defer></script>
    <script src="./script/cart.js" defer async></script>
</head>

<body>
    <!-- header -->
    <?php include "include/store3-header.php"; ?>
    <!-- content -->
    <section class="wrapper">
        <div class="products">

            <div class="middle">
                <section class="carousel" aria-label="Gallery">
                    <ol class="carousel__viewport">
                        <li id="carousel__slide1" tabindex="0" class="carousel__slide">
                            <div class="carousel__snapper">
                                <!-- <img src="./images/Jacket/jacket1.jpeg" style="background-size: cover;"> -->
                                <div class="carousel-pic1"></div>
                                <a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
                                <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
                            </div>
                        </li>
                        <li id="carousel__slide2" tabindex="0" class="carousel__slide">
                            <div class="carousel__snapper"></div>
                            <div class="carousel-pic2"></div>
                            <a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
                            <a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
                        </li>
                        <li id="carousel__slide3" tabindex="0" class="carousel__slide">
                            <div class="carousel__snapper"></div>
                            <div class="carousel-pic3"></div>
                            <a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
                            <a href="#carousel__slide4" class="carousel__next">Go to next slide</a>
                        </li>
                        <li id="carousel__slide4" tabindex="0" class="carousel__slide">
                            <div class="carousel__snapper"></div>
                            <div class="carousel-pic4"></div>
                            <a href="#carousel__slide3" class="carousel__prev">Go to previous slide</a>
                            <a href="#carousel__slide1" class="carousel__next">Go to first slide</a>
                        </li>
                    </ol>
                    <aside class="carousel__navigation">
                        <ol class="carousel__navigation-list">
                            <li class="carousel__navigation-item">
                                <a href="#carousel__slide1" class="carousel__navigation-button">Go to slide 1</a>
                            </li>
                            <li class="carousel__navigation-item">
                                <a href="#carousel__slide2" class="carousel__navigation-button">Go to slide 2</a>
                            </li>
                            <li class="carousel__navigation-item">
                                <a href="#carousel__slide3" class="carousel__navigation-button">Go to slide 3</a>
                            </li>
                            <li class="carousel__navigation-item">
                                <a href="#carousel__slide4" class="carousel__navigation-button">Go to slide 4</a>
                            </li>
                        </ol>
                    </aside>
                </section>
                <br /><br /><br />
                <h1 class="store-title2">Featured Products</h1>
                <div class="featured">


                    <li class="main-product">
                        <div class="item">
                            <a href="../storepages/product-1.html" class=product_detail>
                                <div class="img-product">
                                    <img class="img-prd" src="./images/Jacket/jacket1.jpeg" alt="" />
                                </div>
                                <div class="product-detail">
                                    <h4 class="content-product-h3">
                                        LINNEN BOMBER JACKET
                                    </h4>
                                    <div class="content-product-deltals">
                                        <div class="price">
                                            <p class="money">100.99 $</p>
                                        </div>

                                    </div>
                            </a>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                            </button>
                        </div>

                </div>
                </li>

                <li class="main-product">
                    <div class="item">
                        <a href="../storepages/product-1.html" class=product_detail>
                            <div class="img-product">
                                <img class="img-prd" src="./images/Jacket/jacket2.jpeg" alt="" />
                            </div>
                            <div class="product-detail">
                                <h4 class="content-product-h3">
                                    BEIGE LINEN JACKET
                                </h4>
                                <div class="content-product-deltals">
                                    <div class="price">
                                        <p class="money">129.99 $</p>
                                    </div>

                                </div>
                        </a>
                        <button type="button" class="btn btn-cart">
                            Add to cart
                        </button>
                    </div>

        </div>
        </li>


        <li class="main-product">
            <div class="item">
                <a href="../storepages/product-1.html" class=product_detail>
                    <div class="img-product">
                        <img class="img-prd" src="./images/Jacket/jacket3.jpeg" alt="" />
                    </div>
                    <div class="product-detail">
                        <h4 class="content-product-h3">
                            BLACK RIDER JACKET
                        </h4>
                        <div class="content-product-deltals">
                            <div class="price">
                                <p class="money">250.99 $</p>
                            </div>

                        </div>
                </a>
                <button type="button" class="btn btn-cart">
                    Add to cart
                </button>
            </div>

            </div>
        </li>

        <li class="main-product">
            <div class="item">
                <a href="../storepages/product-1.html" class=product_detail>
                    <div class="img-product">
                        <img class="img-prd" src="./images/Jacket/jacket4.jpeg" alt="" />
                    </div>
                    <div class="product-detail">
                        <h4 class="content-product-h3">
                            BLACK WORKER JACKET
                        </h4>
                        <div class="content-product-deltals">
                            <div class="price">
                                <p class="money">129.99 $</p>
                            </div>

                        </div>
                </a>
                <button type="button" class="btn btn-cart">
                    Add to cart
                </button>
            </div>

            </div>
        </li>


        </div>
        </div>
        <br /><br /><br />
        <h1 class="store-title2" style="width: 200px">New Products</h1>
        </div>
        <div class="carousel2">
            
            <li class="main-product">
                <div class="item">
                    <a href="../storepages/product-1.html" class=product_detail>
                        <div class="img-product">
                            <img class="img-prd" src="./images/product/j1.jpeg" alt="" />
                        </div>
                        <div class="product-detail">
                            <h4 class="content-product-h3">
                                NAVY WORKER JACKET
                            </h4>
                            <div class="content-product-deltals">
                                <div class="price">
                                    <p class="money">99.99 $</p>
                                </div>

                            </div>
                    </a>
                    <button type="button" class="btn btn-cart">
                        Add to cart
                    </button>
                </div>

        </div>
        </li>

        <li class="main-product">
                <div class="item">
                    <a href="../storepages/product-1.html" class=product_detail>
                        <div class="img-product">
                            <img class="img-prd" src="./images/product/j6.png" alt="" />
                        </div>
                        <div class="product-detail">
                            <h4 class="content-product-h3">
                            STRAIGHT JEANS
                            </h4>
                            <div class="content-product-deltals">
                                <div class="price">
                                    <p class="money">59.99 $</p>
                                </div>

                            </div>
                    </a>
                    <button type="button" class="btn btn-cart">
                        Add to cart
                    </button>
                </div>

        </div>
        </li>


        <div class="item2">
            <a href="./product-1.html" style="display: block; width: 100%; height: 100%">
                <img src="./images/product/j6.png" class="product_image" />
                <div class="product-detail" style="text-align: center">
                    <h4><b>STRAIGHT JEANS</b></h4>
                    <p>59.99 $</p>
                </div>
            </a>
        </div>
        <div class="item2">
            <a href="./product-1.html" style="display: block; width: 100%; height: 100%">
                <img src="./images/product/3.png" class="product_image" />
                <div class="product-detail" style="text-align: center">
                    <h4><b>LEATHER SANDALS</b></h4>
                    <p>39.99 $</p>
                </div>
            </a>
        </div>
        <div class="item2">
            <a href="./product-1.html" style="display: block; width: 100%; height: 100%">
                <img src="./images/product/j7.png" class="product_image" />
                <div class="product-detail" style="text-align: center">
                    <h4><b>SNOW PANTS</b></h4>
                    <p>79.99 $</p>
                </div>
            </a>
        </div>
        <div class="item2">
            <a href="./product-1.html" style="display: block; width: 100%; height: 100%">
                <img src="./images/product/j3.jpeg" class="product_image" />
                <div class="product-detail" style="text-align: center">
                    <h4><b>BLACK WORKER JACKET</b></h4>
                    <p>79.99 $</p>
                </div>
            </a>
        </div>
        <div class="item2">
            <a href="./product-1.html" style="display: block; width: 100%; height: 100%">
                <img src="./images/product/1.png" class="product_image" />
                <div class="product-detail" style="text-align: center">
                    <h4><b>PATTERNED SANDALS</b></h4>
                    <p>80.99 $</p>
                </div>
            </a>
        </div>
        </div>
        <br /><br /><br />
        <h1 class="store-title2" style="margin-left: 245px; width: 240px">
            Products On Sale
        </h1>
        <div class="carousel2">
            <div class="item2">
                <a href="./product-1.html" style="display: block; width: 100%; height: 100%">
                    <img src="./images/product/3.png" class="product_image" />
                    <div class="product-detail" style="text-align: center">
                        <h4><b>TWO BUTTONS SANDALS</b></h4>
                        <p>69.99 $</p>
                    </div>
                </a>
            </div>
            <div class="item2">
                <a href="./product-1.html" style="display: block; width: 100%; height: 100%">
                    <img src="./images/product/j5.jpeg" class="product_image" />
                    <div class="product-detail" style="text-align: center">
                        <h4><b>DENIM JACKET</b></h4>
                        <p>89.99 $</p>
                    </div>
                </a>
            </div>
            <div class="item2">
                <a href="./product-1.html" style="display: block; width: 100%; height: 100%">
                    <img src="./images/product/j7.png" class="product_image" />
                    <div class="product-detail" style="text-align: center">
                        <h4><b>SNOW PANTS</b></h4>
                        <p>100.99 $</p>
                    </div>
                </a>
            </div>
            <div class="item2">
                <a href="./product-1.html" style="display: block; width: 100%; height: 100%">
                    <img src="./images/product/j9.png" class="product_image" />
                    <div class="product-detail" style="text-align: center">
                        <h4><b>SNOW JEANS</b></h4>
                        <p>99.99 $</p>
                    </div>
                </a>
            </div>
            <div class="item2">
                <a href="./product-1.html" style="display: block; width: 100%; height: 100%">
                    <img src="./images/product/4.png" class="product_image" />
                    <div class="product-detail" style="text-align: center">
                        <h4><b>BROWN SANDALS</b></h4>
                        <p>199.99 $</p>
                    </div>
                </a>
            </div>
            <div class="item2">
                <a href="./product-1.html" style="display: block; width: 100%; height: 100%">
                    <img src="./images/product/2.png" class="product_image" />
                    <div class="product-detail" style="text-align: center">
                        <h4><b>SLIPPER SANDALS</b></h4>
                        <p>79.99 $</p>
                    </div>
                </a>
            </div>
            <div class="item2">
                <a href="./product-1.html" style="display: block; width: 100%; height: 100%">
                    <img src="./images/product/j11.png" class="product_image" />
                    <div class="product-detail" style="text-align: center">
                        <h4><b>DENIM PANTS</b></h4>
                        <p>89.99</p>
                    </div>
                </a>
            </div>
        </div>



        </div>
    </section>


    <!-- footer -->
    <?php include "include/store3-footer.php"; ?>
</body>

</html>