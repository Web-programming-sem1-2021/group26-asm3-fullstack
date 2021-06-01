<?php

function newProductCsvToJson($fname)
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
};


$products = "../data/products.csv";
$productJson = json_decode(newProductCsvToJson($products));
function getNewroductMatchedStore($products)
{
    $productMatchedStore = [];
    foreach ($products as $product) {
        if (
            $product->store_id === $_GET['store_id']
        ) {
            array_push($productMatchedStore, $product);
        };
    }
    return $productMatchedStore;
}

$productMatchedStore = getNewroductMatchedStore($productJson);

$dates = array_map('strtotime', array_column($productMatchedStore, 'created_time'));
array_multisort($dates,  SORT_DESC, SORT_NUMERIC, $productMatchedStore);

for ($index = 0; $index < count($productMatchedStore); $index++) { ?>

<div class="product--col">
    <div class="product_inner">
        <img src="../storepages/images/laptop.png" width="300" />
        <h2><b><?php echo $productMatchedStore[$index]->name ?></b></h2>
        <h2>Price: <b><?php echo $productMatchedStore[$index]->price ?></b></h2>
        <h5>Created Date: <?php echo substr($productMatchedStore[$index]->created_time, 0, 10) ?></h5>
        <button><a href="./product-1.php">More Detail</a></button>
        <button><a href="./product-1.php">Add to basket</a></button>
    </div>
    <div class="product_overlay">
        <h2>Added to basket</h2>
        <i class="fa fa-check"></i>
    </div>
</div>
<?php }
?>