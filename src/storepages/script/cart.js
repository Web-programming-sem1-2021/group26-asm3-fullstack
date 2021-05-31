// Modal
const modal = document.getElementById("myModal");
const btn = document.getElementById("cart");
const close = document.getElementsByClassName("close")[0];
// tại sao lại có [0] như  thế này bởi vì mỗi close là một html colection nên khi mình muốn lấy giá trị html thì phải thêm [0].
// Nếu mình có 2 cái component cùng class thì khi [0] nó sẽ hiển thị component 1 còn [1] thì nó sẽ hiển thị component 2.
const close_footer = document.getElementsByClassName("close-footer")[0];
const order = document.getElementsByClassName("order")[0];
btn.onclick = function () {
  modal.style.display = "block";
};
close.onclick = function () {
  modal.style.display = "none";
};
close_footer.onclick = function () {
  modal.style.display = "none";
};
order.onclick = function () {
  alert("Cảm ơn bạn đã thanh toán đơn hàng");
};
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

// xóa cart
const remove_cart = document.getElementsByClassName("btn-danger");
for (let i = 0; i < remove_cart.length; i++) {
  const button = remove_cart[i];
  button.addEventListener("click", () => {
    const button_remove = event.target;
    button_remove.parentElement.parentElement.remove();
  });
}

// update cart
function updatecart() {
  const cart_item = document.getElementsByClassName("cart-items")[0];
  const cart_rows = cart_item.getElementsByClassName("cart-row");
  let total = 0;
  for (let i = 0; i < cart_rows.length; i++) {
    const cart_row = cart_rows[i];
    const price_item = cart_row.getElementsByClassName("cart-price ")[0];
    const quantity_item = cart_row.getElementsByClassName(
      "cart-quantity-input"
    )[0];
    const price = parseFloat(price_item.innerText); // chuyển một chuổi string sang number để tính tổng tiền.
    const quantity = quantity_item.value; // lấy giá trị trong thẻ input
    total = total + price * quantity;
  }
  document.getElementsByClassName("cart-total-price")[0].textContent =
    total + "$";
}

const quantity_input = document.getElementsByClassName("cart-quantity-input");
for (let i = 0; i < quantity_input.length; i++) {
  const input = quantity_input[i];
  input.addEventListener("change", function (event) {
    const input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
      input.value = 1;
    }
    updatecart();
  });
}

// Thêm vào giỏ
const add_cart = document.getElementsByClassName("btn-cart");
for (let i = 0; i < add_cart.length; i++) {
  const add = add_cart[i];
  add.addEventListener("click", function (event) {
    const button = event.target;
    const product = button.parentElement.parentElement;
    const img = product.parentElement.getElementsByClassName("img-prd")[0].src;
    const title =
      product.getElementsByClassName("content-product-h3")[0].innerText;
    const price = product.getElementsByClassName("price")[0].innerText;
    addItemToCart(title, price, img);

    modal.style.display = "block";

    updatecart();
  });
}

function addItemToCart(title, price, img) {
  const cartRow = document.createElement("div");
  cartRow.classList.add("cart-row");
  const cartItems = document.getElementsByClassName("cart-items")[0];
  const cart_title = cartItems.getElementsByClassName("cart-item-title");
  for (let i = 0; i < cart_title.length; i++) {
    if (cart_title[i].innerText == title) {
      alert("It's already added to your basket");
      return;
    }
  }

  const cartRowContents = `
  <div class="cart-item cart-column">
      <img class="cart-item-image" src="${img}" width="100" height="100">
      <span class="cart-item-title">${title}</span>
  </div>
  <span class="cart-price cart-column">${price}</span>
  <div class="cart-quantity cart-column">
      <input class="cart-quantity-input" type="number" value="1">
      <button class="btn btn-danger" type="button">Delete</button>
  </div>`;
  cartRow.innerHTML = cartRowContents;
  cartItems.append(cartRow);
  cartRow
    .getElementsByClassName("btn-danger")[0]
    .addEventListener("click", function () {
      const button_remove = event.target;
      button_remove.parentElement.parentElement.remove();
      updatecart();
    });
  cartRow
    .getElementsByClassName("cart-quantity-input")[0]
    .addEventListener("change", function (event) {
      const input = event.target;
      if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
      }
      updatecart();
    });
}
