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
         <?php include './include/store1-header.php' ?>

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

         <!--  FOOTER START --> <?php include './include/store1-footer.php' ?>


     </body>

     </html>