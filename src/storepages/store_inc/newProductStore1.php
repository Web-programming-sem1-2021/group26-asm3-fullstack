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
}

$product = "../data/products.csv";

$productJson = json_decode(newProductCsvToJson($product));

function getNewroductMatchedStore($products)
{
    $productMatchedStore = [];
    foreach ($products as $product) {
        if ($product->store_id === $_GET['store_id']) {
            array_push($productMatchedStore, $product);
        };
    }
    return $productMatchedStore;
}

$productMatchedStore = getNewroductMatchedStore($productJson);

$dates = array_map('strtotime', array_column($productMatchedStore, 'created_time'));
array_multisort($dates, SORT_DESC, SORT_NUMERIC, $productMatchedStore);


if (count($productMatchedStore) > 0) {
    for ($index = 0; $index <= 10; $index++) { ?>
<div class="item">
    <img src="./images/ipad.png" alt="Avatar" style="width: 100%; padding: 0px" />
    <div class="card-container">
        <h4><b><?php echo $productMatchedStore[$index]->name ?></b>
        </h4>
        <h4>Price: <b><?php echo $productMatchedStore[$index]->price ?></b></h4>
        <button><a href="./product-4.html">Add to basket</a></button>
    </div>
</div>
<?php }
} else { ?>
<h1 style="color:darkblue">No New Products found!</h1>
<?php }