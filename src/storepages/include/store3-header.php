<header>
    <nav>
        <!-- bắt đầu nav-mobile -->
        <div class="nav-mobile">
            <div class="icon-mobile" id="btnmenu">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="item_menu" id="menutop">
                <form>
                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." />
                    <button type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>
                <ul>
                    <li><a href="#">Trang Chủ</a></li>
                    <li><a href="#">Sản Phẩm</a></li>
                    <li><a href="#">Liên Hệ</a></li>
                    <li><a href="#">Giới Thiệu</a></li>
                </ul>
            </div>
        </div>

    </nav>
</header>
<header>
    <nav>
        <div class="img-nav">
            <!-- <img src="img/logo.png" alt="" /> -->
        </div>

        <!-- The Modal -->
        <button id="cart">
            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
            My Basket
        </button>
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
    </nav>
</header>