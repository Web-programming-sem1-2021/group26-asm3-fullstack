
<header>
    <nav>
        <div class="img-nav">
            <!-- <img src="img/logo.png" alt="" /> -->
        </div>

        <!-- The Modal -->
        <div class="on-top">
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
    </nav>
</header>