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

$fname = "./data/products.csv";

$productJson = json_decode(newProductCsvToJson($fname));

$dates = array_map('strtotime', array_column($productJson, 'created_time'));
array_multisort($dates,  SORT_DESC, SORT_NUMERIC, $productJson);

for ($i = 0; $i <= 10; $i++) { ?>
<div class="thumbnail">
    <a href="./storepages/product-1.html">
        <img src="./images/homeImages/store1.png" alt="" />
    </a>
    <div class="product-details">
        <h2>
            <?php echo $productJson[$i]->name ?></h2>
        <a href="./storepages/product-1.html">View</a>
    </div>
</div>

<?php }
?>