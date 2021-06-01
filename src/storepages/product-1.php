
<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="layout-product.css" />
    <link rel="stylesheet" href="layout-product.js" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    />
    <link rel="icon" href="#" />
    <title>Home</title>
    <link rel="stylesheet" href="./style2.css" />
    <script src="../script/cart.js"></script>
    <link rel="stylesheet" href="/style/cookie.css" />
    <script src="/script/cookie.js" defer></script>
  </head>

  <body>
    <div class="nav" id="navbar" style="position: sticky; top: 0px">
      <a href="../index.html" class="homeIcon">
        <img src="../icons/ICONIC MALL.svg"
      /></a>
      <a class="nav-section" href="../homepage/about-us.html">About Us</a>
      <a class="nav-section" href="../homepage/fees.html">Fees</a>
      <a class="nav-section" href="../homepage/myAccount/login.html">Account</a>
      <div class="dropdown2">
        <button class="dropbtn2">
          Browse
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="../homepage/browse/browse-stores-by-name.html"
            >Browse Store <br />
            by name</a
          >
          <a href="../homepage/browse/browse-stores-by-categories.html"
            >Browse Store <br />by Categories</a
          >
        </div>
      </div>
      <a class="nav-section" href="../homepage/faqs.html">FAQs</a>
      <a class="nav-section" href="../homepage/contact.html">Contact</a>
      <a
        href="javascript:void(0);"
        style="font-size: 15px"
        class="icon"
        onclick="handleResponsiveNavBar()"
        >&#9776;</a
      >
    </div>

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
        ><img src="../images/close.png" width="20px"
      /></a>
      <!-- <div class="selected">
      <a href="../storepages/category-1.html">Jacket</a>
    </div>
  <a href="#">Dresses</a>
  <a href="#">Jeans</a>
  <a href="#">T-shirt</a>
  <a href="#">Shoes</a> -->
      <div class="dropdown">
        <button class="dropbtn">UNISEX</button>
        <div class="dropdown-content">
          <a href="../storepages/category-1.html">Jacket</a>
          <a href="#">Dresses</a>
          <a href="#">Jeans</a>
          <a href="#">T-shirt</a>
          <a href="#">Shoes</a>
        </div>
      </div>

      <div class="dropdown">
        <button class="dropbtn" style="margin-top: 250px">+ INFO</button>
        <div class="dropdown-content">
          <a href="#">Dresses</a>
          <a href="#">Jeans</a>
          <a href="#">T-shirt</a>
          <a href="#">Shoes</a>
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
        <a href="./basket.html" style="color: black"> MY BASKET</a>
      </button>
    </div>

    <div class="container">
      <!-- <div class="sticky">
        <img src="./images/logo1.png" style="object-fit:covor;width:350px">
    </div> -->

      <!-- TOP -->
      <div class="top">
        <a href="../storepages/store-3.php">
          <img src="./images/logo1.png" style="width: 500px" />
        </a>
      </div>

      <!-- MIDDLE -->
      <div class="middle">
        <div class="middle-left">
          <img class="middle-left" src="./images/Jacket/jacket1.jpeg" />
        </div>

        <div class="middle-right">
          <div class="middle-right-1"></div>
          <form action="Basket.html" method="POST">
            <div class="middle-right-2" ">
            <p id=" productName">LINEN WORKER JACKET</p>
          </form>
        </div>

        <div class="middle-right-3">
          <p class="Scription">
            LIGHTWEIGHT COLLARED JACKET MADE OF LINEN. FEATURING LONG SLEEVES,
            CHEST PATCH POCKETS WITH FLAPS, HIP PATCH
          </p>
        </div>

        <div class="middle-right-4">
          <p><strong>$100.99</strong></p>
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
                      <option value="designer">XS</option>
                      <option value="hacker">S</option>
                      <option value="gamer">M</option>
                      <option value="developer">L</option>
                      <option value="programmer">XL</option>
                    </select>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <button class="button-product" type="submit">Buy now</button>
        <a
          href="./pop-up.html"
          onclick="window.open(this.href, '_blank', 'width=900px,height=630px,top=200,left=400,toolbars=no,scrollbars=no'); return false;"
        >
          <button class="button-product" onclick="" type="submit">
            Add to basket
          </button></a
        >

        <div module="Product_BasketAdd"></div>
      </div>
    </div>

    <div class="bottom">
      <div class="product-detail" style="width: 100%">
        <h1><b>RECOMMENDED PRODUCTS</b></h1>
      </div>
      
    </div>
    <?php include "./src/inc/footer.php"; ?>
  </body>




  <script src="/jsFunctions.js"></script>

