<?php
$store_id = $_GET['store_id'];
function csvToJson($fname)
{
  if (!($fp = fopen($fname, "r"))) {
    die("Can't open file...");
  }
  $key = fgetcsv($fp, "1024", ",");
  $json = [];
  while ($row = fgetcsv($fp, "1024", ",")) {
    $json[] = array_combine($key, $row);
  }
  fclose($fp);
  return json_encode($json, true);
}

$storesFileName = "../data/stores.csv";
$jsonStores = json_decode(csvToJson($storesFileName));


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Store</title>
    <link rel="stylesheet" href="../style/store.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="/script/cookie.js" />
    <script src="/script/cookie.js" defer></script>
    <style>
    .Product_row {
        background: none;
    }

    .product--col {
        background: linear-gradient(-45deg,
                #8f00006b 50%,
                rgba(255, 255, 255, 0.5) 50%);
    }
    </style>
</head>

<body>
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
                        <li><a href="#">Created Time</a></li>
                        <li>
                            <!-- Second Tier Drop Down -->
                            <label for="drop-3" class="toggle">Categories<i class="fa fa-caret-down"></i></label>
                            <a href="../storepages/browse-products-by-categories-store1.html">Categories<input
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

    <h1 style="margin: 20px; color: gray; font-size: 50px; text-align: center">
        Browse Products by Created Time
    </h1>

    <section class="category-section">
        <section class="row">
            <section class="column">
                <label class="conta">Newest
                    <input type="checkbox" checked="checked" />
                    <span class="checkmark"></span>
                </label>
                <label class="conta">Oldest
                    <input type="checkbox" />
                    <span class="checkmark"></span>
                </label>
            </section>
        </section>
    </section>

    <div class="Product_row">


        <?php
    include  './store_inc/browseByTime.php'
    ?>


    </div>

    <!--  FOOTER START -->
    <footer>
        <div class="footer">
            <div class="inner-footer">
                <!--  for company name and description -->
                <div class="footer-items">
                    <a href="./store-1.html"><img class="logo-img" src="./images/logo-white.png" alt="Logo"
                            style="width: 100%" /></a>
                </div>

                <!--  for quick links  -->
                <div class="footer-items">
                    <h3>Find It Fast</h3>
                    <div class="border1"></div>
                    <!--for the underline -->
                    <ul>
                        <a href="../homepage/footer/terms.html">
                            <li>Term of service</li>
                        </a>
                        <a href="../homepage/footer/privacy.html">
                            <li>Privacy Policy</li>
                        </a>
                        <a href="../homepage/contact.html">
                            <li>Contact</li>
                        </a>
                        <a href="../homepage/about-us.html">
                            <li>About Us</li>
                        </a>
                    </ul>
                </div>

                <!--  for some other links -->
                <div class="footer-items">
                    <h3>Quick Link</h3>
                    <div class="border1"></div>
                    <!--for the underline -->
                    <ul>
                        <a href="../index.html">
                            <li>Mall</li>
                        </a>
                        <a href="./browse-products-by-categories-store1.html">
                            <li>Products</li>
                        </a>
                        <a href="../homepage/myAccount/login.html">
                            <li>My Account</li>
                        </a>
                    </ul>
                </div>

                <!--  for contact us info -->
                <div class="footer-items">
                    <h3>Opening Hours</h3>
                    <div class="border1"></div>
                    <ul>
                        <li>MON TO SAT: 8.30am to 7 pm</li>
                        <li>SUN : CLOSED</li>
                    </ul>
                </div>
            </div>

            <!--   Footer Bottom start  -->
            <div class="footer-bottom">
                Copyright &copy;<a href="../homepage/copyright.html">
                    Group 26 Semester A 2021</a>
            </div>
        </div>
    </footer>
    <script src="../jsFunctions.js"></script>
</body>

</html>