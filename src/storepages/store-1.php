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

        // function getStoreData($stores, $storeId)

        // {
        //   foreach ($stores as $store) {
        //     if ($store->id === $storeId) {
        //       return $store;
        //     }
        //   }
        //   // echo $store;
        // }
        // getStoreData($jsonStores, $store_id);
        ?>


     <!DOCTYPE html>
     <html lang="en">

     <head>
         <meta charset="UTF-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         <title>Store</title>
         <link rel="stylesheet" href="/src/style/store.css" />
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
         <!-- x -->
         <link rel="stylesheet" href="/src/style/cookie.css" />
         <script src="/src/script/cookie.js" defer></script>
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

                 <label for="drop"
                     class="toggle">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&#9776;</label>
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
                                 <a
                                     href="./browse-products-by-time-store1.php?store_id=<?php echo ($_GET['store_id']) ?>">Created
                                     Time</a>
                             </li>
                             <li>
                                 <!-- Second Tier Drop Down -->
                                 <label for="drop-3" class="toggle">Categories <i class="fa fa-caret-down"></i></label>
                                 <a href="./browse-products-by-categories-store1.html">Categories <input
                                         class="fa fa-caret-down"></input></a>
                                 <input type="checkbox" id="drop-3" />

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
         <section class="home">
             <div class="slider">
                 <div class="slide active" style="background-image: url('src/images/slider1.jpg')">
                     <div class="container">
                         <div class="caption">
                             <h1>Opening Sales 2021</h1>
                             <p>Upto 50% Exciting Offers</p>
                             <a href="./store-1.html">Shop Now</a>
                         </div>
                     </div>
                 </div>
                 <div class="slide" style="background-image: url('src/images/slider2.png')">
                     <div class="container">
                         <div class="caption">
                             <h1>New Collection 2021</h1>
                             <p>Offers upto 50%</p>
                             <a href="./store-1.html">Shop Now</a>
                         </div>
                     </div>
                 </div>
                 <div class="slide" style="background-image: url('src/images/slider2.png')">
                     <div class="container">
                         <div class="caption">
                             <h1>Exciting Collection 2021</h1>
                             <p>Upto 50% offer</p>
                             <a href="./store-1.html">Shop Now</a>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- controls  -->
             <div class="controls">
                 <div class="prev">
                     < </div>
                         <div class="next">></div>
                 </div>

                 <!-- indicators -->
                 <div class="indicator"></div>
         </section>

         <!--Product of the day-->

         <div class="Cardhead">
             <h1>Product of the day</h1>
         </div>
         <div class="Product_row">
             <div class="product--col">
                 <div class="product_inner">
                     <img src="./images/iphone12.png" width=" 250" />
                     <p>Iphone12</p>
                     <p>Price £1099</p>
                     <p>Updated: 12/04/2021</p>
                     <button><a href="./src/product-3.html">More Detail</a></button>
                     <button><a href="./src/product-3.html">Add to basket</a></button>
                 </div>

                 <div class="product_overlay">
                     <h2>Added to basket</h2>
                     <i class="fa fa-check"></i>
                 </div>
             </div>
         </div>

         <div class="row">
             <div class="product--col">
                 <div class="product_inner">
                     <img src="./images/laptop.png" width="300" />
                     <p>Adventors Laptop</p>
                     <p>Price £1990</p>
                     <p>Updated: 12/04/2021</p>
                     <button><a href="./product-3.html">More Detail</a></button>
                     <button><a href="./product-3.html">Add to basket</a></button>
                 </div>
                 <div class="product_overlay">
                     <h2>Added to basket</h2>
                     <i class="fa fa-check"></i>
                 </div>
             </div>
             <div class="product--col">
                 <div class="product_inner">
                     <img src="./images/iphone12.png" width="300" />
                     <p>Iphone 12</p>
                     <p>Price £1999</p>
                     <p>Updated: 12/04/2021</p>
                     <button><a href="./product-3.html">More Detail</a></button>
                     <button><a href="./product-3.html">Add to basket</a></button>
                 </div>
                 <div class="product_overlay">
                     <h2>Added to basket</h2>
                     <i class="fa fa-check"></i>
                 </div>
             </div>
             <div class="product--col">
                 <div class="product_inner">
                     <img src="./images/camer.png" width="300" />
                     <p>Conon 70D</p>
                     <p>Price $950</p>
                     <p>Updated: 12/04/2021</p>
                     <button><a href="./product-4.html">More Detail</a></button>
                     <button><a href="./product-4.html">Add to basket</a></button>
                 </div>
                 <div class="product_overlay">
                     <h2>Added to basket</h2>
                     <i class="fa fa-check"></i>
                 </div>
             </div>
             <div class="product--col">
                 <div class="product_inner">
                     <img src="./images/ipad.png" width="300" />
                     <p>ipad 2021</p>
                     <p>Price $1200</p>
                     <p>Updated: 12/04/2021</p>
                     <button><a href="./product-4.html">More Detail</a></button>
                     <button><a href="./product-4.html">Add to basket</a></button>
                 </div>
                 <div class="product_overlay">
                     <h2>Added to basket</h2>
                     <i class="fa fa-check"></i>
                 </div>
             </div>
             <div class="product--col">
                 <div class="product_inner">
                     <img src="./images/tv.png" width="300" />
                     <p>LED Smart TV</p>
                     <p>Price $950</p>
                     <p>Updated: 12/04/2021</p>
                     <button><a href="./product-4.html">More Detail</a></button>
                     <button><a href="./product-4.html">Add to basket</a></button>
                 </div>
                 <div class="product_overlay">
                     <h2>Added to basket</h2>
                     <i class="fa fa-check"></i>
                 </div>
             </div>
             <div class="product--col">
                 <div class="product_inner">
                     <img src="./images/ipad.png" width="300" />
                     <p>ipad 2021</p>
                     <p>Price $1200</p>
                     <p>Updated: 12/04/2021</p>
                     <button><a href="./product-4.html">More Detail</a></button>
                     <button><a href="./product-4.html">Add to basket</a></button>
                 </div>
                 <div class="product_overlay">
                     <h2>Added to basket</h2>
                     <i class="fa fa-check"></i>
                 </div>
             </div>
             <div class="product--col">
                 <div class="product_inner">
                     <img src="./images/iphone12.png" width="300" />
                     <p>Iphone 12</p>
                     <p>Price £1999</p>
                     <p>Updated: 12/04/2021</p>
                     <button><a href="./product-3.html">More Detail</a></button>
                     <button><a href="./product-3.html">Add to basket</a></button>
                 </div>
                 <div class="product_overlay">
                     <h2>Added to basket</h2>
                     <i class="fa fa-check"></i>
                 </div>
             </div>
             <div class="product--col">
                 <div class="product_inner">
                     <img src="./images/laptop.png" width="300" />
                     <p>Laptop</p>
                     <p>Price £1999</p>
                     <p>Updated: 12/04/2021</p>
                     <button><a href="./product-3.html">More Detail</a></button>
                     <button><a href="./product-3.html">Add to basket</a></button>
                 </div>
                 <div class="product_overlay">
                     <h2>Added to basket</h2>
                     <i class="fa fa-check"></i>
                 </div>
             </div>
         </div>

         <!--New products-->
         <div class="Cardhead">
             <h1>New Products</h1>
         </div>
         <div class="carousel">
             <?php include 'store_inc/newProductStore1.php'; ?>
         </div>

         <div class=" Cardhead">
             <h1>Featured Products</h1>

         </div>
         <div class="carousel">
             <?php include 'store_inc/featureProductStore1.php'; ?>

         </div>

         <br />

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
                             <a href="../homepage/browse/browse-stores-by-categories.html">
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
     </body>

     </html>