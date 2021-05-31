<?php

function newStoreCsvToJson($fname)
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

$fname = "./data/stores.csv";

$storeJson = json_decode(newStoreCsvToJson($fname));

$dates = array_map('strtotime', array_column($storeJson, 'created_time'));
array_multisort($dates,  SORT_DESC, SORT_NUMERIC, $storeJson);

for ($index = 0; $index <= 10; $index++) { ?>
<div class="thumbnail">
    <a href="./storepages/store-1.php?store_id=<?php echo $storeJson[$index]->id ?>">
        <img src="./images/homeImages/store1.png" alt="" />
    </a>
    <div class="product-details">
        <h2>
            <?php echo $storeJson[$index]->name ?></h2>
        <a href="./storepages/store-1.html">View</a>
    </div>
</div>

<?php }
?>