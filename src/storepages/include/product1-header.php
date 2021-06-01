<header>
    <nav>
        <!-- referenced from : "https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp" -->
        <div class="nav" id="navbar">
            <a href="../index.php" class="homeIcon">
                <img src="../icons/ICONIC MALL.svg" /></a>
            <a class="nav-section" href="about-us.php">About Us</a>
            <a class="nav-section" href="fees.php">Fees</a><a class="nav-section" href="login.php"
                id="nav-bar-account">Account</a>
            <details class="dropdown" style="cursor: pointer; font-size:20px; width:115.75px; padding:16px; ">
                <summary class="dropbtn2">
                    Browse<i class="fa fa-caret-down"></i>
                </summary>
                <div onclick="" class="dropdown-content">
                    <a href="browse-stores-by-name.php">Browse Store <br />
                        by name</a>
                    <a href="browse-stores-by-categories.php">Browse Store <br />by Categories</a>
                </div>
            </details>
            <a class="nav-section" href="faqs.php">FAQs</a>
            <a class="nav-section" href="contact.php">Contact</a>
            <a href="javascript:void(0);" style="font-size: 15px" class="icon"
                onclick="handleResponsiveNavBar()">&#9776;</a>
        </div>
    </nav>


</header>

<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img src="./images/close.png"
                width="20px" /></a>
        <!--nav-->
        <div class="dropdown">
            <button class="dropbtn">UNISEX</button>
            <div class="dropdown-content">
                <a href="../storepages/category-1.php">Jacket</a>
                <a href="../storepages/category-1.php">Dresses</a>
                <a href="../storepages/category-1.php">Jeans</a>
                <a href="../storepages/category-1.php">T-shirt</a>
                <a href="../storepages/category-1.php">Shoes</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn" style="margin-top: 250px">+ INFO</button>
            <div class="dropdown-content">
                <a href="../storepages/category-1.php">Contact Us</a>
                <a href="../storepages/category-1.php">Help</a>
                <a href="../storepages/category-1.php">Newsletter</a>
                <a href="../storepages/category-1.php">Company</a>
            </div>
        </div>
    </div>
    <!-- <div class="sidenav"></div> -->
    <div class="sidebar-button">
        <span style="font-size: 28px; cursor: pointer; margin-left: 30px" onclick="openNav()"><img
                src="./images/menu.png" width="20px" /></span>
        <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "240px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
        </script>
    </div>
    <!-- loginMypageMybasket -->
    <div class="on-top" style="margin-right:0%;">
        <button type="button" class="button-top">LOGIN</button>
        <button type="button" class="button-top">MY PAGE</button>
        <button id="cart" class="fa fa-shopping-basket">
            MY BASKET
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
                <button type="button" class="btn btn-secondary close-footer">
                    Keep Shopping
                </button>
                <button type="button" class="btn btn-primary order">
                    Buy Now
                </button>
            </div>
        </div>
    </div>

</body>