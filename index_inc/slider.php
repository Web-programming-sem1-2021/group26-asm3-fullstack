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

$fname = "./data/categories.csv";

$json = csvToJson($fname);
$a = json_decode($json);
for ($i = 0; $i <= 4; $i++) { ?>
<div class="thumbnail">
    <a href="./storepages/product-1.html">
        <img src="./images/homeImages/6.png" alt="jacket" /></a>
    <div class="product-details">
        <h2>

        </h2>
        <p><span>$39.99</span> $29.99</p>
        <p><a href="./storepages/store-2.html">Store:<?php echo $a[$i]
            ->name; ?> </a></p>
        <a href="./storepages/product-1.html">View More</a>
    </div>
</div>
<?php }
?>
