<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Browse</title>
    <link rel="stylesheet" href="../../style.css" />
    <link rel="stylesheet" href="../../style/browse.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <script src="../../jsFunctions.js" defer></script>
    <link rel="stylesheet" href="/style/cookie.css">
    <script src="/script/cookie.js" defer></script>
</head>

<body>
    <!-- referenced from : "https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp" -->
    <?php include "inc/header.php";?>

    <h1 style="margin: 20px; color: gray; font-size: 50px">
        Browse Stores by Name
    </h1>
    <aside>

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

$stores = "./data/stores.csv";
$jsonStores = json_decode(csvToJson($stores));
?>
        <section>
            <?php foreach (range("A", "Z") as $element) {?>
            <a href="/browse-stores-by-name.php?element=<?php echo $element; ?>"><?php echo $element; ?></a><br />
            <br />
            <?php }?>
        </section>
        </section>
    </aside>
    <div class="store-cards">
        <?php for ($i = 0; $i < count($jsonStores); $i++) {
    if (
        !empty($_GET["element"]) &&
        $jsonStores[$i]->name[0] === $_GET["element"]
    ) {?>
        <div class="store-card">
            <a href="../../storepages/store-2.html">
                <h2>
                    <?php echo $jsonStores[$i]->name; ?>
                </h2>
            </a>
            <p>
                <a href="../../storepages/store-2.html">
                    <img class="store-image" src="../../storepages/images/Jacket/jacket5.jpg" alt="Picture of Helen" />
                </a>
            </p>
            <p class="thumbnail-description">
                Helen has fourth grade piano but in secret prefers to play electronic
                keyboards. She loves synthesizer sounds and arguing with Jean over who
                should play the basslines.
            </p>
        </div>
        <?php } elseif (empty($_GET["element"])) {?>
        <div class="store-card">
            <a href="../../storepages/store-2.html">
                <h2>
                    <?php echo $jsonStores[$i]->name; ?>
                </h2>
            </a>
            <p>
                <a href="../../storepages/store-2.html">
                    <img class="store-image" src="../../storepages/images/Jacket/jacket5.jpg" alt="Picture of Helen" />
                </a>
            </p>
            <p class="thumbnail-description">
                Helen has fourth grade piano but in secret prefers to play electronic
                keyboards. She loves synthesizer sounds and arguing with Jean over who
                should play the basslines.
            </p>
        </div>
        <?php }
}?>

    </div>
    <?php echo $jsonStores[1]->name[0]; ?>

    <footer>
        <?php include "inc/footer.php";?>
    </footer>
</body>

</html>