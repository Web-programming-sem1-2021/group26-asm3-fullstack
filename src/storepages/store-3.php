<!DOCTYPE html>
<html lang="en">
<?php  ?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>26ST.ore</title>
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

    <!-- header original -->
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
        ><img src="./images/close.png" width="20px"
      /></a>
 
      <div class="dropdown">
        <button class="dropbtn">UNISEX</button>
        <div class="dropdown-content">
          <a href="../storepages/category-1.html">Jacket</a>
          <a href="../storepages/category-1.html">Dresses</a>
          <a href="../storepages/category-1.html">Jeans</a>
          <a href="../storepages/category-1.html">T-shirt</a>
          <a href="../storepages/category-1.html">Shoes</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn" style="margin-top: 250px">+ INFO</button>
        <div class="dropdown-content">
          <a href="../storepages/category-1.html">Contact Us</a>
          <a href="../storepages/category-1.html">Help</a>
          <a href="../storepages/category-1.html">Newsletter</a>
          <a href="../storepages/category-1.html">Company</a>
        </div>
      </div>
    </div>
    <!-- <div class="sidenav"></div> -->
    <div class="sidebar-button">
      <span
        style="font-size: 28px; cursor: pointer; margin-left: 30px"
        onclick="openNav()"
        ><img src="./images/menu.png" width="20px"
      /></span>
      <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "240px";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
      </script>
    </div>
    <div class="on-top">
      <button type="button" class="button-top">LOGIN</button>
      <button type="button" class="button-top">MY PAGE</button>
      <button type="button" class="button-top">
        <a href="../storepages/Basket.html" style="text-decoration: none">
          MY BASKET</a
        >
      </button>
    </div>
    <div class="container">
      <!-- <div class="sticky">
            <img src="./images/logo1.png" style="object-fit:covor;width:350px">
            </div> -->
      <!-- TOP -->
      <div class="top">
        <div class="sticky">
          <a href="../storepages/store-2.html">
            <img
              src="./images/logo1.png"
              style="object-fit: cover; width: 500px"
            />
          </a>
        </div>
      </div>
    </div>
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
</div>
                <h1 class="store-title2" style="margin-left: 100px; width: 240px">
            Featured Products</h1>
                 <div class="carousel3">

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
        <h1 class="store-title2" style="margin-left: 200px; width: 240px">New Products</h1>
        
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

        <li class="main-product">
            <div class="item">
                <a href="../storepages/product-1.html" class=product_detail>
                    <div class="img-product">
                        <img class="img-prd" src="./images/product/3.png" alt="" />
                    </div>
                    <div class="product-detail">
                        <h4 class="content-product-h3">
                            LEATHER SANDALS
                        </h4>
                        <div class="content-product-deltals">
                            <div class="price">
                                <p class="money">39.99 $</p>
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
                        <img class="img-prd" src="./images/product/j7.png" alt="" />
                    </div>
                    <div class="product-detail">
                        <h4 class="content-product-h3">
                            SNOW PANTS
                        </h4>
                        <div class="content-product-deltals">
                            <div class="price">
                                <p class="money">79.99 $</p>
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
                        <img class="img-prd" src="./images/product/j3.jpeg" alt="" />
                    </div>
                    <div class="product-detail">
                        <h4 class="content-product-h3">
                            BLACK WORKER JACKET
                        </h4>
                        <div class="content-product-deltals">
                            <div class="price">
                                <p class="money">79.99 $</p>
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
                        <img class="img-prd" src="./images/product/1.png" alt="" />
                    </div>
                    <div class="product-detail">
                        <h4 class="content-product-h3">
                            PATTERNED SANDALS
                        </h4>
                        <div class="content-product-deltals">
                            <div class="price">
                                <p class="money">80.99 $</p>
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
        <br /><br /><br />
        <h1 class="store-title2" style="margin-left: 200px; width: 240px">
            Products On Sale
        </h1>
        <div class="carousel2">

            <li class="main-product">
                <div class="item">
                    <a href="../storepages/product-1.html" class=product_detail>
                        <div class="img-product">
                            <img class="img-prd" src="./images/product/3.png" alt="" />
                        </div>
                        <div class="product-detail">
                            <h4 class="content-product-h3">
                                TWO BUTTONS SANDALS
                            </h4>
                            <div class="content-product-deltals">
                                <div class="price">
                                    <p class="money">69.99 $</p>
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
                        <img class="img-prd" src="./images/product/j5.jpeg" alt="" />
                    </div>
                    <div class="product-detail">
                        <h4 class="content-product-h3">
                            DENIM JACKET
                        </h4>
                        <div class="content-product-deltals">
                            <div class="price">
                                <p class="money">89.99 $</p>
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
                        <img class="img-prd" src="./images/product/j7.png" alt="" />
                    </div>
                    <div class="product-detail">
                        <h4 class="content-product-h3">
                            SNOW PANTS
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
                        <img class="img-prd" src="./images/product/j9.png" alt="" />
                    </div>
                    <div class="product-detail">
                        <h4 class="content-product-h3">
                            SNOW JEANS
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
                        <img class="img-prd" src="./images/product/4.png" alt="" />
                    </div>
                    <div class="product-detail">
                        <h4 class="content-product-h3">
                            BROWN SANDALS
                        </h4>
                        <div class="content-product-deltals">
                            <div class="price">
                                <p class="money">199.99 $</p>
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
                        <img class="img-prd" src="./images/product/2.png" alt="" />
                    </div>
                    <div class="product-detail">
                        <h4 class="content-product-h3">
                            SLIPPER SANDALS
                        </h4>
                        <div class="content-product-deltals">
                            <div class="price">
                                <p class="money">79.99 $</p>
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
                        <img class="img-prd" src="./images/product/j11.png" alt="" />
                    </div>
                    <div class="product-detail">
                        <h4 class="content-product-h3">
                            DENIM PANTS
                        </h4>
                        <div class="content-product-deltals">
                            <div class="price">
                                <p class="money">89.99 $</p>
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
    </section>


    <!-- footer -->
    <?php include "include/store3-footer.php"; ?>
</body>

</html>