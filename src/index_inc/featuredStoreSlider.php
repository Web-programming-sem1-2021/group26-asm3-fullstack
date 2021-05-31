<?php

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


$fname = "./data/stores.csv";

$storeJson = json_decode(storeCsvToJson($fname));

function filterFeaturedStore($storeArray)
{
    $filteredFeatured = array();
    foreach ($storeArray as $store) {
        if ($store->featured === 'TRUE') {
            array_push($filteredFeatured, $store);
        };
    }
    return $filteredFeatured;
};


$filteredStore = filterFeaturedStore($storeJson);


for ($index = 0; $index < 10; $index++) { ?>
<div class="thumbnail">
    <a href="./storepages/store-1.php?store_id=<?php echo $filteredStore[$index]->id ?>">
        <img src="./images/homeImages/6.png" alt="jacket" /></a>
    <div class="product-details">
        <h2>
            <a href="./storepages/store-1.php?store_id=<?php echo $filteredStore[$index]->id ?>">
                <em><?php echo $filteredStore[$index]
                            ->name; ?></em> </a>
        </h2>

        <br /> <a href=" ./storepages/product-1.html">View More</a>
    </div>
</div>
<?php }
?>