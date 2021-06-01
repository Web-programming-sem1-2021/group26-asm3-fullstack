<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="layout-product.css" />
    <script src="./layout-product.js" defer></script>
    <link rel="icon" href="#" />
    <title>LINNEN BOMBER JACKET</title>
    <link rel="stylesheet" href="./style2.css" />
    <script src="../script/cart.js" defer></script>
    <link rel="stylesheet" href="../style/cookie.css" />
    <script src="../script/cookie.js" defer></script>
    <script src="./script/store3-main.js" defer></script>
    <script src="./script/cart.js" defer async></script>

</head>

<body>
<?php include "../storepages/include/product1-header.php"; ?>


    <div class="container">
        <!-- <div class="sticky">
        <img src="./images/logo1.png" style="object-fit:covor;width:350px">
    </div> -->

        <!-- TOP -->
        <div class="top">
            <a href="../storepages/store-2.php">
                <img src="./images/logo1.png" style="width: 500px" />
            </a>
        </div>

        <!-- MIDDLE -->
        <div class="middle">
            <div class="middle-left">
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd" src="./images/Jacket/jacket1.jpeg"/>
                    </div>
                </li>
            </div>
        </div>

        <div class="middle-right">
            <div class="middle-right-1"></div>
            <div class="middle-right-2">
                <li class=" main-product">
                <div class=" product-detail">
                    <h1 class="content-product-h3" style="text-align: left;">
                        LINNEN BOMBER JACKET
                    </h1>
                </div>
                </li>
            </div>




            <div class="middle-right-3">
                <p class="Scription">
                    LIGHTWEIGHT COLLARED JACKET MADE OF LINEN. FEATURING LONG SLEEVES,
                    CHEST PATCH POCKETS WITH FLAPS, HIP PATCH
                </p>
            </div>

            <div class="middle-right-4">
                <li class="main-product">
                    <div class="content-product-deltals">
                        <div class="price">
                            <p class="money">100.99 $</p>
                        </div>

                    </div>
                </li>
            </div>

            <div class="middle-right-4">
                <p>Color : Navy Blue | 7545/600</p>
            </div>
            <br />
            <hr width="230px" />
            <div class="middle-right-4">
                <table>
                    <tbody>
                        <td class="quantity-button">Quantity</td>
                        <td class="size-button">Select size</td>

                        <tr>
                            <td class="quantity-button">
                                <div class="quantity-controller">
                                    <input class="" min="1" name="" value="1" type="number" />
                                </div>
                            </td>
                            <td>
                                <div class="size-button">
                                    <select name="select-size" id="select-size">
                                        <option value="free" selected>Free</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="./pop-up.html"
                onclick="window.open(this.href, '_blank', 'width=900px,height=630px,top=200,left=400,toolbars=no,scrollbars=no'); return false;">
                <button class="button-product" type="submit">Buy now</button>
            </a><br>
            <button type="button" class="btn-cart">
                Add to cart
            </button>

            <div module="Product_BasketAdd"></div>
        </div>
    </div>

    </div>
    <div class="bot">
    </div>
    <div class="product-detail" style="width: 100%">
        <h1><b>RECOMMENDED PRODUCTS</b></h1>
    </div>
    <div class="carousel2">
        <li class="main-product">
            <div class="item">
                <a href="../storepages/product-1.php" class=product_detail>
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
    <li class="main-product">
        <div class="item">
            <a href="../storepages/product-1.php" class=product_detail>
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
            <a href="../storepages/product-1.php" class=product_detail>
                <div class="img-product">
                    <img class="img-prd" src="./images/product/j3.jpeg" alt="" />
                </div>
                <div class="product-detail">
                    <h4 class="content-product-h3">
                        BLACK WORKER JACKET
                    </h4>
                    <div class="content-product-deltals">
                        <div class="price">
                            <p class="money">149.99 $</p>
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
            <a href="../storepages/product-1.php" class=product_detail>
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
    </div>

    </div>
    <?php include "./include/product1-footer.php"; ?>


    <script src="../jsFunctions.js"></script>
</body>