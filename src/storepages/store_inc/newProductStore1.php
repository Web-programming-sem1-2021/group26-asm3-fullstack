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
array_multisort($dates,  SORT_DESC, SORT_NUMERIC, $productMatchedStore);

for ($index = 0; $index < 10; $index++) { ?>
    <li class="main-product">
        <div class="item">
            <a href="product-1.php">
                <div class="img-product">
                    <img class="img-prd" src="./images/ipad.png" alt="Avatar" style="width: 100%; padding: 0px" />
                </div>
                <div class="card-container">
                    <div class="product-detail">

                        <h4 class="content-product-h3"><b><?php echo $productMatchedStore[$index]->name ?></b></h4>
            </a>
            <h4>Price:</h4>
            <p class="price money"><b><?php echo $productMatchedStore[$index]->price ?> $</b></p>


            <button class="btn-cart">Add to basket</button>
        </div>
        </div>
    </li>
<?php }
?>