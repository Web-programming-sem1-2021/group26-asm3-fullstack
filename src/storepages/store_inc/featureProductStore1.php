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

for ($index = 0; $index < count($filteredProducts); $index++) { ?>
<div class="item">
    <img src="./images/ipad.png" alt="Avatar" style="width: 100%; padding: 0px" />
    <div class="card-container">
        <h4><b><?php echo $filteredProducts[$index]->name ?></b></h4>
        <h4>Price: <b><?php echo $filteredProducts[$index]->price ?></b></h4>
        <button><a href="./product-4.html">Add to basket</a></button>
    </div>
</div>
<?php }
?>