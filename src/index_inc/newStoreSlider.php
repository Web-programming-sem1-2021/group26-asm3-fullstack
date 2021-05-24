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


<?php }
?>