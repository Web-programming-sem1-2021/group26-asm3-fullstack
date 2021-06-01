<?php
function productCsvToJson($fname)
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

$product = "../data/products.csv";

$productJson = json_decode(productCsvToJson($product));

function getProductMatchedStore($products)
{
    $productMatchedStore = [];
    foreach ($products as $product) {
        if ($product->store_id === $_GET['store_id']) {
            array_push($productMatchedStore, $product);
        };
    }
    return $productMatchedStore;
}


function filterFeaturedProduct($productArray)
{
    $filteredFeatured = array();
    foreach ($productArray as $product) {
        if ($product->featured_in_store === 'TRUE') {
            array_push($filteredFeatured, $product);
        };
    }
    return $filteredFeatured;
};

$productOfCurrentStore =  getProductMatchedStore($productJson);

$filteredProducts = filterFeaturedProduct($productOfCurrentStore);


if (count($filteredProducts) > 0) { 
    for ($index = 0; $index < count($filteredProducts); $index++) {?>
    <li class="main-product">
        <div class="item">
            <a href="product-2.php">
                <div class="img-product">
                    <img class="img-prd" src="./images/ipad.png" alt="Avatar" style="width: 100%; padding: 0px" />
                </div>
                <div class="card-container">
                    <div class="product-detail">

                        <h4 class="content-product-h3" style="font-family:Segoe UI; color:black; font-size:9.8pt; font-weight:normal"><b><?php echo $productMatchedStore[$index]->name ?></b></h4>
            </a>
            <p class="price money" style="font-family:Segoe UI; color:black; font-size:9pt; font-weight:normal "><b><?php echo $productMatchedStore[$index]->price ?> $</b></p>


            <button class="btn-cart"style="width: 100%; background-color:white; border-color:rgb(156, 156, 156);border-width: 1px; color:black; padding:0.6em; cursor:pointer">Add to basket</button>
        </div>
        </div>
    </li>
<?php }}else { ?><h1 style="color:darkblue">No Featured Products found!</h1>
<?php } ?>