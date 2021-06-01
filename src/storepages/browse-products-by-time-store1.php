<?php
$store_id = $_GET["store_id"];
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

    <?php include "./include/store1-header.php"; ?>
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
        include "./store_inc/browseByTime.php";
        $total_products = count($productMatchedStore);

        $paginatedProducts = getProductsForPage(
            $productMatchedStore,
            $_GET["offset"],
            $_GET["limit"]
        );

        for ($index = 0; $index < count($paginatedProducts); $index++) { ?>

        <div class="product--col">
            <div class="product_inner">
                <img src="../storepages/images/laptop.png" width="300" />
                <h2><b><?php echo $paginatedProducts[$index]->name; ?></b>
                </h2>
                <h2>Price: <b><?php echo $paginatedProducts[$index]
                    ->price; ?></b>
                </h2>
                <h5>Created Date: <?php echo substr(
                    $paginatedProducts[$index]->created_time,
                    0,
                    10
                ); ?>
                </h5>
                <button><a href="./product-3.html">More Detail</a></button>
                <button><a href="./product-3.html">Add to basket</a></button>
            </div>
            <div class="product_overlay">
                <h2>Added to basket</h2>
                <i class="fa fa-check"></i>
            </div>
        </div>
        <?php }
        ?>



    </div>


    <nav aria-label="Page navigation">
        <ul class="pagination">
            <!-- Pagination list items will go here -->

        </ul>
    </nav>
    <?php
    $limit = 2;

    $current_page = isset($_GET["page"]) ? $_GET["page"] : 1;

    if (!empty($current_page) && $current_page > 1) {
        $offset = $current_page * $limit - $limit;
    } else {
        $offset = 0;
    }

    $first_product_displayed = $offset + 1;

    $total_pages = ceil($total_products / $limit);

    $last_product_displayed =
        $total_products >= $offset * $limit + $limit
            ? $offset + $limit
            : $total_products;

    if ($total_pages > 1) { ?>

    <nav aria-label="Page navigation">
        <ul class="pagination">

            <?php
            if ($current_page > 1) { ?>

            <li class="page-item"><a class="page-link"
                    href="browse-products-by-time-store1.php?store_id=<?php
                    echo $store_id;
                    echo "&page=1&offset=0&limit=2";
                    ?>">First</a>
            </li>

            <?php }

            for (
                $page_in_loop = 1;
                $page_in_loop <= $total_pages;
                $page_in_loop++
            ) {
                if ($total_pages > 3) {
                    if (
                        ($page_in_loop >= $current_page - 5 &&
                            $page_in_loop <= $current_page) ||
                        ($page_in_loop <= $current_page + 5 &&
                            $page_in_loop >= $current_page)
                    ) { ?>

            <li class="page-item <?php echo $page_in_loop == $current_page
                ? "active disabled"
                : ""; ?>">
                <a class="page-link"
                    href="browse-products-by-time-store1.php?store_id=<?php
                    echo $store_id;
                    echo "&page=" .
                        $page_in_loop .
                        "&offset=" .
                        $offset .
                        "&limit=" .
                        $limit;
                    ?>">
                    <?php echo $page_in_loop; ?> </a>
            </li>

            <?php }
                } else {
                     ?>

            <li class=" page-item <?php echo $page_in_loop == $current_page
                ? "active disabled"
                : ""; ?>">
                <a class="page-link"
                    href="browse-products-by-time-store1.php?store_id=<?php
                    echo $store_id;
                    echo "&page=" .
                        $page_in_loop .
                        "&offset=" .
                        $offset .
                        "&limit=" .
                        $limit;
                    ?> ">
                </a>
            </li>

            <?php
                } ?>

            <?php
            }

            if ($current_page < $total_pages) { ?>

            <li class=" page-item"><a class="page-link"
                    href="browse-products-by-time-store1.php?store_id=<?php
                    echo $store_id;
                    echo "&page=" .
                        $total_pages .
                        "&offset=" .
                        $offset .
                        "&limit=" .
                        $limit;
                    ?>; ?>">Last</a>
            </li>

            <?php }
            ?>
        </ul>
    </nav>

    <?php }
    ?>

    <!--  FOOTER START -->
    <?php include "./include/store1-footer.php"; ?>
    <script src="../jsFunctions.js"></script>
</body>

</html>