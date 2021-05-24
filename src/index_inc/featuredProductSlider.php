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

$fname = "./data/products.csv";

$productJson = json_decode(csvToJson($fname));

function filterFeaturedProduct($productArray)
{
    $filteredFeatured = array();
    foreach ($productArray as $product) {
        if ($product->featured_in_mall === 'TRUE') {
            array_push($filteredFeatured, $product);
        };
    }
    return $filteredFeatured;
};


$filteredProducts = filterFeaturedProduct($productJson);


for ($index = 0; $index < 10; $index++) { ?>
<div class="thumbnail">
    <a href="./storepages/product-1.html">
        <img src="./images/homeImages/6.png" alt="jacket" /></a>
    <div class="product-details">
        <h2>

        </h2>
        <p><span>$39.99</span> $29.99</p>
        <p><a href="./storepages/store-2.html">
                <em><?php echo $filteredProducts[$index]
                            ->name; ?></em> </a>
        </p>


        <a href=" ./storepages/product-1.html">View More</a>
    </div>
</div>
<?php }
?>