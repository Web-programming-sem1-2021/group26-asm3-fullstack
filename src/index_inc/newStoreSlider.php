<?php

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

$fname = "./data/stores.csv";

$storeJson = json_decode(csvToJson($fname));


function dateSorting($a, $b)
{
    echo strtotime($a['created_time']) - strtotime($b['created_time']);
};


uasort($storeJson, 'dateSorting');





for ($i = 0; $i <= 10; $i++) { ?>
<div class="thumbnail">
    <a href="./storepages/store-1.html">
        <img src="./images/homeImages/store1.png" alt="" />
    </a>
    <div class="product-details">
        <h2>
            <?php echo $storeJson[$i]->created_time ?></h2>
        <a href="./storepages/store-1.html">View</a>
    </div>
</div>

<?php }
?>