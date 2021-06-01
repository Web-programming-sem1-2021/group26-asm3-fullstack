<header>

    <!---Naivgation-->
    <nav>
        <div id="logo" style="width:fit-content;">
            <a class="logo" href="./store-1.php?store_id=<?php echo $store_id ?>">
                <h1 style="color:red;margin:20px; font-size:50px">
                    <?php foreach ($jsonStores as $store) {
                        if ($store->id === $store_id) {
                            echo ($store->name);
                        }
                    } ?>
                </h1>
            </a>

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
                        <a href="./browse-products-by-time-store1.php?store_id=<?php echo $_GET['store_id'] . '&offset=0&limit=2' ?>">Created
                            Time</a>
                    </li>
                    <li>
                        <!-- Second Tier Drop Down -->
                        <label for="drop-3" class="toggle">Categories <i class="fa fa-caret-down"></i></label>
                        <a href="./browse-products-by-categories-store1.html">Categories <input class="fa fa-caret-down" style="border: none; background: transparent;"></input></a>
                        <input type="checkbox" id="drop-3" style="border: none; background: transparent;" />

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


<header>
    <nav>
        <!-- loginMypageMybasket -->
        <div class="on-top" style="z-index: 2 !important">
            <button id="cart" class="fa fa-shopping-basket" style="cursor:pointer;">
                <h3>
                    MY BASKET
                </h3>
            </button>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">My Basket</h5>
                    <span class="close">&times;</span>
                </div>
                <div class="modal-body">
                    <div class="cart-row">
                        <span class="cart-item cart-header cart-column">Product</span>
                        <span class="cart-price cart-header cart-column">Price</span>
                        <span class="cart-quantity cart-header cart-column">Quantity</span>
                    </div>
                    <div class="cart-items"></div>
                    <div class="cart-total">
                        <strong class="cart-total-title">Total:</strong>
                        <span class="cart-total-price">0$</span>
                    </div>
                </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-secondary coupon-footer" style="background-color: pink;">Get
                        30% Discount</button>
                    <button type="button" class="btn btn-secondary close-footer">
                        Keep Shopping
                    </button>
                    <button type="button" class="btn btn-primary order">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>