<header>
    <nav>
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
                    <button type="button" class="btn btn-primary order" onclick="order.onclick=alert" Thank you for
                        using our 26ST.ore";">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>