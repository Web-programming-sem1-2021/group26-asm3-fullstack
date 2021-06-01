<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="icon" href="#" />
    <title>ICONIC MALL</title>
    <link rel="stylesheet" href="
    style.css" />

    <link rel="stylesheet" href="autoScroller.css" />
    <script src="jsFunctions.js" defer async></script>
    <script src="slider.js" defer async></script>
    <link rel="stylesheet" href="./style/cookie.css">
    <script src="script/cookie.js" defer async></script>
</head>

<body>
    <!-- referenced from : "https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp" -->

    <?php include "inc/header.php"; ?>


    <section class="home">
        <div class="main-slider">
            <div class="slide active" style="background-image: url('images/homeImages/home-slider1.png')">
                <div class="slide-container">
                    <div class="caption">
                        <h1>1. Winter Collection 2020</h1>
                        <p>Lorem ipsum dummy text goes here.</p>
                        <a href="./storepages/store-1.php">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url('images/homeImages/home-slider2.png')">
                <div class="slide-container">
                    <div class="caption">
                        <h1>2. Winter Collection 2020</h1>
                        <p>Lorem ipsum dummy text goes here.</p>
                        <a href="./storepages/store-1.php">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url('images/homeImages/home-slider3.jpg')">
                <div class="slide-container">
                    <div class="caption">
                        <h1 style="color: rgb(255, 255, 255)">Apple Products</h1>
                        <p style="color: oldlace">Lorem ipsum dummy text goes here.</p>
                        <a href="./storepages/store-2.php">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- controls  -->
        <div class="controls">
            <div class="prev">
            </div>
            <div class="next"> </div>
        </div>

        <!-- indicators -->
        <div class="indicator"></div>
    </section>
    <main>
        <h1 class="store-title">New stores</h1>
        <div class="slide-container1">
            <div class="slide-button" id="slide-left-1" src="images/arrow-left.png"></div>
            <section class="slider">
                <?php include "./index_inc/newStoreSlider.php"; ?>
            </section>
            <div id="slide-right-1" class="slide-button" src="images/arrow-right.png"></div>
        </div>

        <h1 class="store-title">New Products</h1>
        <div class="slide-container1">
            <div class="slide-button" id="slide-left-1" src="images/arrow-left.png"></div>
            <section class="slider">
                <?php include "./index_inc/newProductSlider.php"; ?>


            </section>

            <div id="slide-right-2" class="slide-button" src="images/arrow-right.png"></div>
        </div>


        <h1 class="store-title">Featured Stores</h1>
        <div class="slide-container1" style="max-width: fit-content;">
            <div class="slide-button" id="slide-left-1" src="images/arrow-left.png"></div>
            <section class="slider">
                <?php include "./index_inc/featuredStoreSlider.php"; ?>
            </section>
            <div id="slide-right-2" class="slide-button" src="images/arrow-right.png"></div>
        </div>


        <h1 class="store-title">Featured Products</h1>
        <div class="slide-container1">
            <div class="slide-button" id="slide-left-1" src="images/arrow-left.png"></div>
            <section class="slider" style="max-width: fit-content;">
                <?php include "./index_inc/featuredProductSlider.php"; ?>

            </section>
            <div id="slide-right-2" class="slide-button" src="images/arrow-right.png"></div>
        </div>




    </main>

    <?php include "inc/footer.php"; ?>

</body>

</html>