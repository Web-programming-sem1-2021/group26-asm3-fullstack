<?php
echo "hoang";

function storeCsvToJson($fname)
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

// $fname = "../data/stores.csv";

// $storeJson = json_decode(storeCsvToJson($fname));

$product = "../data/products.csv";

$productJson = json_decode(productCsvToJson($product));

$stores = "../data/stores.csv";

$storeJson = json_decode(productCsvToJson($stores));

$productMatchedStore = [];
foreach ($productJson as $product) {
    $product->store_id === $storeJson[0]->id
        ? array_push($productMatchedStore, $product)
        : null;
}

// var_dump($productMatchedStore);

function filterFeaturedProduct($productArray)
{
    $filteredFeatured = [];
    foreach ($productArray as $product) {
        if ($product->featured_in_store === "TRUE") {
            array_push($filteredFeatured, $product);
        }
    }
    // var_dump($filteredFeatured);

    return $filteredFeatured;
}

$filteredProducts = filterFeaturedProduct($productMatchedStore);

// var_dump($filteredProducts);
for ($index = 0; $index < count($filteredProducts); $index++) { ?>
<div class="item">
    <img src="../images/ipad.png" alt="Avatar" style="width: 100%; padding: 0px" />
    <div class="card-container">
        <h4><b><?php echo $filteredProducts[$index]->name; ?></b></h4>
        <p>Price:<?php echo $filteredProducts[$index]->price; ?></p>
        <button><a href="./product-4.html">Add to basket</a></button>
    </div>
</div>
<?php }
