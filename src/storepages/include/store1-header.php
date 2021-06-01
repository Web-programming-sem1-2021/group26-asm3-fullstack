<header>
    <!---Naivgation-->
    <nav>
        <div id="logo">
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
        <label for=" drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop" />
        <ul class="menu">
            <li>
                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle">Products <i class="fa fa-caret-down"></i></label>
                <a href="#">Products<i class="fa fa-caret-down"></i></a>
                <input type="checkbox" id="drop-2" />
                <ul>
                    <li><a href="./browse-products-by-time-store1.php?store_id=<?php echo $store_id ?>">
                            Created Time</a></li>
                    <li>
                        <!-- Second Tier Drop Down -->
                        <label for=" drop-3" class="toggle">Categories<i class="fa fa-caret-down"></i></label>
                        <a href="./browse-products-by-time-store1.php?store_id=<?php echo $store_id ?>">Categories<input
                                class="fa fa-caret-down"></input></a>
                        <input type="checkbox" id="drop-3" />

                        <ul>
                            <li>
                                <a href="../storepages/browse-products-by-categories-store1.html">Laptop</a>
                            </li>
                            <li>
                                <a href="../storepages/browse-products-by-categories-store1.html">Phones</a>
                            </li>
                            <li>
                                <a href="../storepages/browse-products-by-categories-store1.html">Cameras</a>
                            </li>
                            <li>
                                <a href="../storepages/browse-products-by-categories-store1.html">Tablets</a>
                            </li>
                            <li>
                                <a href="../storepages/browse-products-by-categories-store1.html">TV</a>
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