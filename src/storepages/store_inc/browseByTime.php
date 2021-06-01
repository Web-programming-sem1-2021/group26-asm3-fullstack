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

$products = "../data/products.csv";
$productJson = json_decode(newProductCsvToJson($products));
function getNewroductMatchedStore($products)
{
    $productMatchedStore = [];
    foreach ($products as $product) {
        if ($product->store_id === $_GET["store_id"]) {
            array_push($productMatchedStore, $product);
        }
    }
    return $productMatchedStore;
}

$productMatchedStore = getNewroductMatchedStore($productJson);

$dates = array_map(
    "strtotime",
    array_column($productMatchedStore, "created_time")
);
array_multisort($dates, SORT_DESC, SORT_NUMERIC, $productMatchedStore);

function getProductsForPage($productArray, $offset, $limit)
{
    return array_slice($productArray, $offset, $limit);
}
